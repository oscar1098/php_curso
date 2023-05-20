<?php

// ? Acceder a una variable desde una funcion

$a = 5;

function  test(){
    global $a;
    echo $a . "<br>";
    $a = 10;
}

test();
echo $a . "<br>";

echo "<hr>";

// ? Argumento con variable global

function  test_2(&$n){
    $n += 10;
}

test_2($a);

echo $a;



