<?php
class Router {
    private $routes = [];
    
    public function add($route, $handler) {
        $this->routes[$route] = $handler;
    }
    
    public function dispatch($uri) {
        if (array_key_exists($uri, $this->routes)) {
            $parts = explode('@', $this->routes[$uri]);
            $controller = $parts[0];
            $method = $parts[1];
            $method();
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "404 Not Found";
        }
    }
}
