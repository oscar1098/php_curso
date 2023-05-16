<?php

class Coche{

    var $ruedas;
    var $color;
    var $motor;

    function __construct(){
        $this->ruedas=4;
        $this->color="";
        $this->motor = "1600";
    }

    function frenar(){
        echo "Estoy frenando";
    }

    function acelerar(){
        echo "Estoy acelerando";
    }

    function estableceColor ($colorCoche,$nombreCoche){
        $this->color = $colorCoche;
        echo "El color de" . $nombreCoche . "es" . $colorCoche;
    }

}

$seat = new Coche;



// ------------------------------------------------------------------------------------------------------------------------------------------

class Camion{

    var $ruedas;
    var $color;
    var $motor;

    function __construct(){
        $this->ruedas=8;
        $this->color="";
        $this->motor = "2600";
    }

    function frenar(){
        echo "Estoy frenando";
    }

    function acelerar(){
        echo "Estoy acelerando";
    }

    function estableceColor ($colorCoche,$nombreCoche){
        $this->color = $colorCoche;
        echo "El color de" . $nombreCoche . "es" . $colorCoche;
    }

}
?>

