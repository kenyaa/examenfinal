<?php

require_once "carrera.php";

class CarrerasModel extends Carrera
{
    private $tabla;

    public function __construct($datasource)
    {
        $this->tabla = "carreras";
        parent::__construct($datasource);
    }

    public function all()
    {
        $carreras = array();
        $query = "SELECT * FROM {$this->tabla}";
        $stmt = $this->datasource->prepare($query);
        $stmt->execute();
        while ($carrera = $stmt->fetch(PDO::FETCH_OBJ)) {
            array_push($carreras, $carrera);
        }
        return $carreras;
    }

}