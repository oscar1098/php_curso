<?php

class Personas{
    public $nombre, $apellido, $edad;

    public function __construct($nombre,$apellido,$edad){
        $this -> nombre = strtolower($nombre);
        $this -> apellido = strtolower($apellido);

    }

    public function setNombre($nombre){
        $this -> nombre = strtolower($nombre);
    }

    public function getNombre(){
        return ucwords($this -> nombre);
    }
    
}