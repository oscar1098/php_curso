<?php

require_once("ejercicio_1.php");

class CalculosComplejos extends Calculadora{
    public function sumaMultiplicacion(){
        return $this->suma() * $this->num1;
    }

    public function restaDivision(){
        return $this->resta() / $this->num2;
    }

    public function multiplicacionPotenciacion(){
        return $this->multiplicacion() ** $this->suma();
    }

    public function superConjunto(){
        $resul = $this->conjunto() . "<br>" . $this->suma(). "*" . $this->num1 . "=" . $this->sumaMultiplicacion() . "<br>" . $this->resta(). "/" . $this->num2 . "=" . $this->restaDivision() . "<br>" . $this->multiplicacion(). "^" . $this->suma() . "=" . $this->multiplicacionPotenciacion();

        return $resul;
    }
}

$calculo = new CalculosComplejos(2,10);

echo "<br>SUPER CALCULADORA<br><br>";
echo $calculo->suma(). "*" . $calculo->num1 . "=" . $calculo->sumaMultiplicacion() . "<br>"; 
echo  $calculo->resta(). "/" . $calculo->num2 . "=" . $calculo->restaDivision() . "<br>";
echo  $calculo->multiplicacion(). "^^" . $calculo->suma() . "=" . $calculo->sumaMultiplicacion() . "<br>";
echo $calculo->superConjunto();

?>

