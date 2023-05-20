<?php


$fac=1;

for ($i=1; $i <= 10; $i++){
    echo "$fac x $i = " . $fac *= $i;
    echo "<br>";
}

echo "<br><hr>";

function factorial($n){
    $fac=1;

    for ($i=1; $i <= $n; $i++){
    echo "$fac x $i = " . $fac *= $i;
    echo "<br>";
    }
}

factorial(5);
echo "<br><hr>";

function factorial_2($n){
    $fac=1;

    for ($i=1; $i <= $n; $i++){
    $fac *= $i;
    }
    return $fac;
}

echo factorial_2(5);








