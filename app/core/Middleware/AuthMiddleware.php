<?php

class AuthMiddleware {
    public function handle() {
        if (!isset($_SESSION['taLogado']) || !$_SESSION['taLogado']) {
            header("Location: " . dirname($_SERVER['SCRIPT_NAME']) . "/login");
            exit;
        }
        return true;
    }
}