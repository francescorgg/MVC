<?php

namespace Core;

use PDO;

class Database
{
    public $connection;
    public $statement;

    public function __construct($config)
    {

        $dsn = 'mysql:'.http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, 'root');
    }

    public function query($sql, $params = []){

        $statement = $this->connection->prepare($sql);
        $statement->execute($params);

        return $statement;
    }
}