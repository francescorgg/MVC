<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php'
];

function abort($error = 404){

    http_response_code($error);

    require "view/{$error}.php";

    die();

}

function routeToController($uri, $routes){
    
    if(array_key_exists($uri, $routes)){
        
        require $routes[$uri];
        
    } else {
        
        abort();
        
    };
    
}