<?php

class AuthMiddleware {
    public function handle() {
        if (!isset($_SESSION['taLogado']) || !$_SESSION['taLogado']) {
            header("Location: login");
            exit;
        }
        return true;
    }
}