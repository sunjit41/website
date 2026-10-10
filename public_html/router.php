<?php
    
declare(strict_types = 1);

class Router{
    private array $routes = [];

    public function add(string $path, Closure $handler): void{
        $this->routes[$path] = $handler;
    }

    public function dispatch(string $path): void{
        foreach ($this->routes as $route => $handler){
            $pattern = preg_replace("#\{\w+\}#", "([^\/]+)", $route);
            
            if(preg_match("#^$pattern$#", $path, $matches)){
                array_shift($matches);
                call_user_func_array($handler, $matches);
                return;
            }
        }
        //echo "Router did not Dispatch";
        session_start();
        $_SESSION['errornum'] = "404 - Resource not Found";
        $_SESSION['request_uri'] = $_SERVER["REQUEST_URI"];
        $_SESSION['sunerror'] = "Router did not dispatch.";
        require "views/error404.php";
        //header("Location: /error");
        //exit;

        
    }
}
?>