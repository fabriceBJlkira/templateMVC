<?php

namespace Routes;

use Exception;

class Router 
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    // public function define($route)
    // {
    //     $this->routes = $route;
    // }

    public function get($uri, $controller)
    {
        // \dd($_SERVER);
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
    public function show($uri, $method)
    {
        // ;
        explode('@', $this->routes[$method][$uri]);
        if (array_key_exists($uri, $this->routes[$method])) {
            // return $this->routes[$method][$uri];
            // \dd($this->routes[$method][$uri]);
            return $this->callMethod(...explode('@', $this->routes[$method][$uri]));
        } else{
            throw new Exception("404 Not Found");
        }

        
    }

    public function callMethod($controller, $action)
    {
        $controller = "App\\Controller\\$controller";
        $cont = new $controller;
        return $cont->$action();
        // dd($action);
    }

    public static function load($file)
    {
        $router = new static;
        require $file;

        return $router;
    }
}