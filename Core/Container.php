<?php

namespace Core;

class Container
{
    public $bindings = [];

    public function bind($key, $resolver){
        $this->bindings[$key] = $resolver;
    }

    public function resolve($key){
        //dobbiamo controllare che ciò che viene passato nel $bindings abbia un riscontro

        if(! array_key_exists($key, $this->bindings)){
            //se non esiste esiste
            throw new \Exception("No matching found your key: " . $key);

        }

        //se quindi esiste
        $resolver = $this->bindings[$key];

        return call_user_func($resolver);
        
    }
}
