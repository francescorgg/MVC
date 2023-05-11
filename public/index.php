<?php

const BASE_PATH = __DIR__ . "/../";

require BASE_PATH . "Core/functions.php";
// require base_path("Database.php");
// require base_path("Response.php");

spl_autoload_register(function($f){
    
    //tramite str_replace procediamo a sostiuire backslash ("Core\Database") con lo slash
    $result = str_replace('\\', '/', $f);

    require base_path("{$result}.php");

});

require base_path("Core/router.php");
