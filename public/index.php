<?php

const BASE_PATH = __DIR__ . "/../";

require BASE_PATH . "Core/functions.php";
// require base_path("Database.php");
// require base_path("Response.php");

spl_autoload_register(function($class){
    
    //tramite str_replace procediamo a sostiuire backslash ("Core\Database") con lo slash
    $class = str_replace('\\', '/', $class);

    require base_path("{$class}.php");

});


require base_path('bootstrap.php');

//require base_path("Core/router.php");
//adesso sostituiamo il require del file, con l'istanza della nuova classe Router

$router = new Core\Router();

//istanziata la classe abbiamo bisogno di un require al file delle rotte: routes.php
$routes = require "../routes.php";

//infine abbiamo bisogno dell'elemento fondamentale: l'uri
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

