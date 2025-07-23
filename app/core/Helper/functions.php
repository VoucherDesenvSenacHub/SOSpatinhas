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
    
    $tiposPermitidos = [
        IMAGETYPE_JPEG,
        IMAGETYPE_PNG
    ];

    $tamanhoMax = 2 * 1024 * 1024;      
    $tamanhoMaxTotal = 20 * 1024 * 1024; 
    $tamanhoTotal = 0;

    try {
        if (isset($fotos['image'])) {
            foreach ($fotos['image']['tmp_name'] as $key => $nomeTmp) {
                if ($nomeTmp && $fotos['image']['error'][$key] === UPLOAD_ERR_OK) {

                    $nomeOriginal = $fotos['image']['name'][$key];
                    $tamanhoArquivo = filesize($nomeTmp);
                    $tipoImagem = @exif_imagetype($nomeTmp);
                    $extension = pathinfo($nomeOriginal, PATHINFO_EXTENSION);

                    if (!in_array($tipoImagem, $tiposPermitidos)) {
                        throw new Exception("Tipo de imagem não permitido. Os tipos permitidos são JPG, PNG, JPEG.");
                    }

                    if ($tamanhoArquivo > $tamanhoMax) {
                        throw new Exception("Arquivo '{$nomeOriginal}' excede o tamanho máximo de 2MB.");
                    }

                    $tamanhoTotal += $tamanhoArquivo;
                    if ($tamanhoTotal > $tamanhoMaxTotal) {
                        throw new Exception("O total das imagens excede o limite de 20MB.");
                    }

                    $nomeUnico = uniqid() . '.' . $extension;
                    $destination = $uploadDir . $nomeUnico;

                    if (move_uploaded_file($nomeTmp, $destination)) {
                        $caminhoFts[] = $destination;
                    } else {
                        throw new Exception("Erro ao mover o arquivo para: $destination");
                    }

                } else {
                    throw new Exception("Erro no upload da imagem: " . $fotos['image']['error'][$key]);
                }
            }
        } else {
            throw new Exception("Nenhuma imagem foi enviada.");
        }
    } catch (Exception $e) {
        setModal('erro', 'Erro encontrado!', $e->getMessage());
    }

    return $caminhoFts;
}

function imageDelete($caminhoFts) {
    try {
        foreach ((array)$caminhoFts as $caminho) {
            if (file_exists($caminho)) {
                if (!unlink($caminho)) {
                    throw new Exception("Erro ao deletar imagem");
                }
            } else {
                throw new Exception("Arquivo não encontrado");
            }
        }
    } catch (Exception $e) {
        setModal('erro', 'Erro ao deletar imagem', $e->getMessage());
    }
}

function imageUpdate($imagensAntigas, $imagensNovas) {
    imageDelete($imagensAntigas);
    $caminhoFts = imageUpload($imagensNovas);

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