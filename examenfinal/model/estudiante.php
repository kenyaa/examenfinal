<?php

class Estudiante
{

    protected $id;
    protected $nombres;
    protected $apellidos;
    protected $pago_mes;
    protected $datasource;
    protected $id_carrera;
   // protected $carrera;

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
