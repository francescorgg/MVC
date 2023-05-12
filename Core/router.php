<?php

namespace Core;

class Router
{
    protected $routes = [];

    protected function add($uri, $controller, $method){
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }

    //in ognuna di queste funzioni possiamo notare come si ripetono gli stessi elementi, tranne uno: 'method'
    //a questo punto procedere con la costruzione di una helper function 'add'
    public function get($uri, $controller)
    {
       $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller)
    {
       $this->add($uri, $controller, 'POST');
    }

    public function delete($uri, $controller)
    {
       $this->add($uri, $controller, 'DELETE');
    }
    
    public function put($uri, $controller)
    {
       $this->add($uri, $controller, 'PUT');
    }

    public function patch($uri, $controller)
    {
       $this->add($uri, $controller, 'PATCH');
    }

    public function route($uri, $method){

        //il parametro uri che passiamo nella funzione verrà confrontato con gli altri elementi 
        //idicizzati 'uri' nell'array $routes in alto
        foreach ($this->routes as $route) {
            if($route['uri'] === $uri && $route['method'] === strtoupper($method)){
                return require base_path($route['controller']);
            }
        }
        
        $this->abort();
    }

    protected function abort($error = 404){
    
        http_response_code($error);
    
        require base_path("view/{$error}.php");
    
        die();
    
    }
}
