<?php

class AuthMiddleware {
    public function handle() {
        if (!isset($_SESSION['taLogado']) || !$_SESSION['taLogado']) {
            redirect('adm/login');
        }
        return true;
    }
}