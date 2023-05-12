<?php
//lista delle rotte

//da qui controlleremo la nuova logica delle rotte basata sulle funzioni create nella classe Router

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/notes', 'controllers/notes/notes.php');
$router->get('/note', 'controllers/notes/note.php');