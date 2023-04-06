<?php

require "functions.php";
//require "router.php";



//routeToController($uri, $routes);

$dsn = "mysql:host=localhost;port=3306;dbname=sakila;charset=utf8mb4";


$pdo = new PDO($dsn, 'root');

$statement = $pdo->prepare("SELECT * FROM articoli");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

dd($posts);