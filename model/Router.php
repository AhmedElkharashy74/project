<?php
class Router {
        private $routes = [];
        
        public function add($route, $handler) {
            $this->routes[$route] = $handler;
        }
        
        public function dispatch($uri) {
            $uriparts = explode("?", $uri);
            $handler = $this->findHandler($uriparts[0]);
            // echo $uriparts[0];  
            if ($handler) {
                $parts = explode('@', $handler);
                $controller = $parts[0];
                $method = $parts[1];
                $controllerInstance = new $controller();
                $controllerInstance->$method();
            } else {
                header("HTTP/1.0 404 Not Found");
                echo "404 Not Found";
            }
        }
        
        private function findHandler($uri) {
            foreach ($this->routes as $route => $handler) {
                if ($this->isMatchingRoute($route, $uri)) {
                    return $handler;
                }
            }
            
            return null;
        }
        
        private function isMatchingRoute($route, $uri) {
            $pattern = "/^" . str_replace('/', '\/', $route) . "$/";
            return preg_match($pattern, $uri);
        }

        public function redirect($uri, $data = []) {
            session_start();
    
            $_SESSION['redirect_data'] = $data;
    
            header("Location: $uri");
            exit; 
        }
        

    }
    

