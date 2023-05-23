<?php

function valoracion($nombre,$rating = 5){
    echo "$nombre tiene un rating de $rating";
}

valoracion("Curso php", 10);

echo "<br><hr>";

function concatenar(...$palabras){
    $resultado = "";
    foreach ($palabras as $palabra) {
        $resultado = $resultado . $palabra . " ";
    }
    echo $resultado;
    
}

concatenar('Oscar','Jhosep','Santiago');














