<?php

class Carrera
{

    protected $id;
    protected $nombre;
    protected $duracion;
    
    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __construct($datasource)
    {
        $this->datasource = $datasource;
    }
}
