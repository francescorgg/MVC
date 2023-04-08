<?php

require "functions.php";
require "Database.php";

require "router.php";
routeToController($uri, $routes);

// $config = (require "conf.php");

// $db = new Database($config['database']);

// $posts = $db->query('SELECT * FROM articoli')->fetchAll(PDO::FETCH_ASSOC);


// dd($posts);