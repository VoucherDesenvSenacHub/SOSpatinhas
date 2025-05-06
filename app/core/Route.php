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
        $requestMetodo = $_SERVER['REQUEST_METHOD'];
        $routes = self::$routes[$requestMethod] ?? [];
        $encontrou = false;

        foreach ($routes as $route => $handler) {
            $padrao = preg_replace('#\{[a-zA-Z_][a-zA-Z0-9_]*\}#', '([a-zA-Z0-9_-]+)', $route);
            $padrao = "#^" . $padrao . "$#";

            if (preg_match($padrao, $requestUri, $matches)) {
                if (self::checkPermissions($handler['roles']), $requestUri) {
                    array_shift($matches); 
                    if (is_string($handler['callback']) && strpos($handler['callback'], '@') !== false) {
                        list($controller, $method) = explode('@', $handler['callback']);
                        require_once "../controllers/$controller.php";
                        $instance = new $controller();
                        call_user_func_array([$instance, $method], $matches);
                    }
                    $encontrou = true;
                } else {
                    echo 'confirm("Você não possui permissão para ver esta página")';
                    header("Location: /login");
                    exit;
                }
                break;
            }
        }

        if (!$encontrou) {
            include('../views/404.php')
        }
    }

    public static function checkPermissao($tiposPermitidos, $requestUri){
        $idUser = $_SESSION['idUser'];
        $tipoUser = $_SESSION['tipoUser'];

        if(!isset($_SESSION['taLogado']) || !$_SESSION['taLogado']){
            return false;
        }

        if(empty($tiposPermitidos)){
            return true;
        }

        if($tipoUser !== 'Admin'){
            return in_array($_SESSION['tipoUser'], $tiposPermitidos);
        }

        $permissao = new PermissaoAdminController();
        $resultado = $permissao->checar($idUser);
        return in_array($requestUri, $resultado)
    }
}
