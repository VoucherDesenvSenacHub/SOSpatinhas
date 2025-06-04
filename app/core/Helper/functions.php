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

function imageUpload($fotos){
    $caminhoFts = [];
    $caminhoPasta = 'uploads/';

    foreach ($fotos['tmp_name'] as $key => $tmpName) {
        if ($tmpName) {
            $originalName = basename($fotos['name'][$key]);
            $uniqueName = uniqid() . '_' . $originalName;
            $destination = $uploadDir . $uniqueName;

            if (move_uploaded_file($tmpName, $destination)) {
                $caminhoFts[] = $destination;
            }
        }
    }

    return $caminhoFts;
}