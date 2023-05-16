<?php

class Calculadora{

    public $num1;
    public $num2;
    function __construct($num1,$num2){
       $this->num1=$num1;
       $this->num2=$num2;
    }

    public  function suma(){
        return $this->num1 + $this->num2;
    }

    public  function resta(){  
        return $this->num1 - $this->num2;
    }

    public  function multiplicacion(){
        return $this->num1 * $this->num2;
    }

    public  function division(){
        return $this->num1 / $this->num2;
    }

    public function conjunto(){
        $resul = "<br>Todas las operaciones juntas <br>" . $this->num1. "+" . $this->num2 . "=" . $this->suma() . "<br>". $this->num1. "-" . $this->num2 . "=" . $this->resta() . "<br>" . $this->num1. "*" . $this->num2 . "=" . $this->multiplicacion() . "<br>" . $this->num1. "/" . $this->num2 . "=" . $this->division() . "<br>";
        return $resul;
    }

}

    $operaciones =  new Calculadora(10,5);
    echo "CALCULADORA<br><br>";
    echo $operaciones->num1. "+" . $operaciones->num2 . "=" . $operaciones->suma() . "<br>"; 
    echo $operaciones->num1. "-" . $operaciones->num2 . "=" . $operaciones->resta() . "<br>";
    echo  $operaciones->num1. "*" . $operaciones->num2 . "=" . $operaciones->multiplicacion() . "<br>" ; 
    echo $operaciones->num1. "/" . $operaciones->num2 . "=" . $operaciones->division() . "<br>"; 
    // echo $operaciones->conjunto();
?>