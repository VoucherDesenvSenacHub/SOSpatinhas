<?php

class AdminMiddleware {
    public function handle() {
        if (!isset($_SESSION['tipoUser']) || $_SESSION['tipoUser'] !== 'Admin') {
            echo "alert(Você não tem permissão de administrador.)";
            exit;
        }
        return true;
    }
}