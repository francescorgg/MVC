<?php

const BASE_PATH = __DIR__ . "/../";

require BASE_PATH . "Core/functions.php";
// require base_path("Database.php");
// require base_path("Response.php");

spl_autoload_register(function($f){

    require base_path("Core/".$f.".php");

});

require base_path("Core/router.php");
