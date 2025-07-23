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