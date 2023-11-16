<?php

class Horario {
    private $id;
    private $descripcion;
    private $orden;

    public function __construct() {
        $this->setId(0);
        $this->setDescripcion("");
        $this->setOrden(0);
    }

    function setId($id) {
        $this->id = $id;
    }

    function getId() {
        return $this->id;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function getDescripcion() {
        return $this->$descripcion;
    }

    function setOrden($orden) {
        $this->orden = $orden;
    }

    function getOrden() {
        return $this->$orden;
    }
}

?>