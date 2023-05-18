<?php

use Core\Container;
use Core\Database;
use Core\App;

$container = new Container();

$container->bind('Core\Database', function(){
    $config = require base_path("conf.php");
    return new Database($config['database']);
});

$db = $container->resolve('Core\Database');

App::setContainer($container);
