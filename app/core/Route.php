<?php

class Route{
    protected static $routes = [];

    public static function get($uri, $callback, $roles = [], $middleware = []) {
        self::$routes['GET'][$uri] = [
            'callback' => $callback,
            'middleware' => $middleware
        ];
    }
    
    public static function post($uri, $callback, $roles = [], $middleware = []) {
        self::$routes['POST'][$uri] = [
            'callback' => $callback,
            'middleware' => $middleware
        ];
    }

    public static function dispatch() {
        $scriptName = dirname($_SERVER['SCRIPT_NAME']);
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestUri = '/' . ltrim(substr($requestUri, strlen($scriptName)), '/');
        $requestMetodo = $_SERVER['REQUEST_METHOD'];
        $routes = self::$routes[$requestMetodo] ?? [];
        $encontrou = false;

        foreach ($routes as $route => $handler) {
            $padrao = preg_replace('#\{[a-zA-Z_][a-zA-Z0-9_]*\}#', '([a-zA-Z0-9_-]+)', $route);
            $padrao = "#^" . $padrao . "$#";

            if (preg_match($padrao, $requestUri, $matches)) {
                array_shift($matches);

                foreach ($handler['middleware'] ?? [] as $middlewareClass) {
                    require_once "app/core/Middleware/$middlewareClass.php";
                    $middleware = new $middlewareClass();
                    if (!call_user_func_array([$middleware, 'handle'], $matches)) {
                        return;
                    }
                }

                if (is_string($handler['callback']) && strpos($handler['callback'], '@') !== false) {
                    list($controller, $method) = explode('@', $handler['callback']);
                    require_once "app/controllers/$controller.php";
                    $instance = new $controller();
                    call_user_func_array([$instance, $method], $matches);
                } else {
                    call_user_func_array($handler['callback'], $matches);
                }

                $encontrou = true;
                break;
            }
        }

        if (!$encontrou) {
            include('app/views/user/404.php');
        }
    }
}
