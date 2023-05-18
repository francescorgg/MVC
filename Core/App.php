<?php

namespace Core;

class App
{
    protected static $container;

    //ora noi vogliamo valorizzare questa proprietà della classe App
    public static function setContainer($container){

        static::$container = $container;

    }

    public static function container(){

        return static::$container;

    }

    public static function bind($class, $function){

        static::container()->bind($class, $function);

    }

    public static function resolve($class){

        return static::container()->resolve($class);

    }
}