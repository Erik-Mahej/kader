<?php

class Router {
    private $routes;

    public function __construct() {
        $this->routes = [];
    }

    public function addRoute($path, $callback) {
        $this->routes[$path] = $callback;
    }

    public function route() {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        //echo "Routing path: " . $path . "<br>";
        if (isset($this->routes[$path])) {
            //echo "Route found! <br>";
            call_user_func($this->routes[$path]);
        } else {
            echo "Route not found! <br>";
            http_response_code(404);
            echo "404 - Page not found <br>";
        }
    }
}
