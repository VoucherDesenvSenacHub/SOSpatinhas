<?php

class Route{
    protected static $routes = [];

    public static function get($uri, $callback, $roles = []){
        self::$routes['GET'][$uri] = [
            'callback' => $callback,
            'roles' => $roles
        ];
    }

    public static function post($uri, $callback, $roles = []){
        self::$routes['POST'][$uri] = [
            'callback' => $callback,
            'roles' => $roles
        ];
    }

    public static function dispatch()
    {
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $routes = self::$routes[$requestMethod] ?? [];
        $found = false;

        foreach ($routes as $route => $handler) {
            $pattern = preg_replace('#\{[a-zA-Z_][a-zA-Z0-9_]*\}#', '([a-zA-Z0-9_-]+)', $route);
            $pattern = "#^" . $pattern . "$#";

            if (preg_match($pattern, $requestUri, $matches)) {
                // Check permissions before calling the handler
                if (self::checkPermissions($handler['roles'])) {
                    array_shift($matches); // Remove the full match
                    if (is_string($handler['callback']) && strpos($handler['callback'], '@') !== false) {
                        // If the callback is a controller action
                        list($controller, $method) = explode('@', $handler['callback']);
                        require_once "../app/Controllers/$controller.php";
                        $instance = new $controller();
                        call_user_func_array([$instance, $method], $matches);
                    } else {
                        // If it's a closure function
                        call_user_func_array($handler['callback'], $matches);
                    }
                    $found = true;
                } else {
                    // Redirect to login or 403 Forbidden page if no permission
                    header("Location: /login"); // or header("HTTP/1.0 403 Forbidden");
                    exit;
                }
                break;
            }
        }

        if (!$found) {
            http_response_code(404);
            echo "404 Not Found";
        }
    }

    public static function checkPermissao($tiposPermitidos){
        $idUser = $_SESSION['idUser'];
        $tipoUser = $_SESSION['tipoUser'];

        if(!isset($_SESSION['taLogado']) || !$_SESSION['taLogado']){
            return false;
        }

        if(empty($tiposPermitidos)){
            return true;
        }

        if($tipoUser !== 'Admin'){
            return in_array($_SESSION['role'], $requiredRoles);
        }


    }
}