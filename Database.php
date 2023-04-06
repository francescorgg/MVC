<?php

class Database
{
    private $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=sakila;charset=utf8mb4";
        $this->connection = new PDO($dsn, 'root');
    }

    public function query($sql){
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        return $statement;
    }
}