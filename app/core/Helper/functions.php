<?php

function setModal(string $tipo, string $titulo, string $messagem): void {
    $_SESSION['notifModal'] = [
        'tipo' => $tipo,       
        'titulo' => $titulo,
        'mensagem' => $messagem
    ];
}

function redirect(string $url): void {
    header("Location: /SOSPatinhas/$url");
    exit();
}

function imageUpload($fotos) {
    $caminhoFts = [];
    $uploadDir = 'app/uploads/';

    try {
        if (isset($fotos['image'])) {
            foreach ($fotos['image']['tmp_name'] as $key => $tmpName) {
                if ($tmpName && $fotos['image']['error'][$key] === UPLOAD_ERR_OK) {
                    $extension = pathinfo($originalName, PATHINFO_EXTENSION);
                    $uniqueName = uniqid() . '.' . $extension;
                    $destination = $uploadDir . $uniqueName;

                    if (move_uploaded_file($tmpName, $destination)) {
                        $caminhoFts[] = $destination;
                    } else {
                        throw new Exception("Falha ao mover:  $tmpName para $destination");
                    }
                } else {
                    throw new Exception("Arquivo Inválido: " . $fotos['image']['error'][$key]);
                }
            }
        } else {
            throw new Exception("Não há imagens em \$_FILES");
        }
    } catch (Exception $e) {
        setModal('erro', 'Erro encontrado!', $e->getMessage());
    }

    return $caminhoFts;
}

function salvar($obj){
    try{
        $controllerName = ucfirst(strtolower($obj)) . "Controller";
        $controllerFile = 'app/controllers/' . $controllerName . '.php';
        require_once $controllerFile;
        $controller = new $controllerName();
        $controller->CRUD();
    } catch (Exception $e) {
        setModal('erro', 'Erro encontrado!', $e->getMessage());
    }
    
    //redirect('adm/lista/' . $obj);
}?>