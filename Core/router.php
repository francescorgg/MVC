<?php

function abort($error = 404){

    http_response_code($error);

    require base_path("view/{$error}.php");

    die();

}

function routeToController($uri, $routes){
    
    if(array_key_exists($uri, $routes)){
        
        require base_path($routes[$uri]);
        
    } else {
        
        abort();
        
    };
    
}

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
routeToController($uri, $routes);