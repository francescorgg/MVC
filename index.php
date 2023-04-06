<?php

require "functions.php";
require "Database.php";

// require "router.php";

// routeToController($uri, $routes);

$db = new Database();

$posts = $db->query('SELECT * FROM articoli')->fetchAll(PDO::FETCH_ASSOC);


dd($posts);