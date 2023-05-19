<?php

$a = 2;
$b = 9;

switch ($a) {
    case 1:
        echo "Lunes <br>";
        break;
    case 2:
        echo "Martes <br>";
        break;
    case 3:
        echo "Miercoles <br>";
        break;
    case 4:
        echo "Jueves <br>";
        break;
    case 5:
        echo "Viernes <br>";
        break;
    case 6:
        echo "Sabado <br>";
        break;
    case 7:
        echo "Domingo
         <br>";
        break;
    default:
        echo "DATO INCORRECTO";
        break;
}

echo match($b){
    1 => "Lunes",
    2 => "Martes",
    3 => "Miercoles",
    4 => "Jueves",
    5 => "Viernes",
    6 => "Sabado",
    7 => "Domingo",
    default => "Invalido"
};