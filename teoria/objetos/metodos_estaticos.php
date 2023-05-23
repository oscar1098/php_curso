<?php

class Humano{

    public static $nombre = "Oscar Ardila";

    public static function saludar(){
        echo "Hola mundo";
    }

    public function saludoPersonalizado(){
        echo "Hola" . self :: $nombre;
    }
}

class Peruano extends Humano{
    public function saludoPeruano(){
        echo "Hola desde perú" .parent::$nombre;
    }
}

Humano::saludar();

echo Humano::$nombre;

$humano = new Humano;

$humano ->saludoPersonalizado();

$peruano = new Peruano;

$peruano -> saludoPeruano();




