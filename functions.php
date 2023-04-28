<?php

function dd($value){

    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die;

}

function urlIs($path){

    return $_SERVER['REQUEST_URI'] === $path;

}

function base_path($path_file){

    return BASE_PATH . $path_file;
}

function view($path){
    return base_path('view/') . $path;
}