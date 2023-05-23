<?php
 
$array = [1,2,3];

list($a,$b,$c) = $array;

echo $a;
// -----------------------------------------------------;
$array2 = range(10,20);

var_dump($array2);

echo count($array2);

// -----------------------------------------------------;

$array3 = ['Oscar','Ana','Andres','Sofia'];

if (in_array('Andres',$array3)) {
    echo "El nombre buscado esta en el array";
}else {
    echo "El valor buscado no esta en el array";
}

//-------------------------------------------------------;

$array4 = ['Oscar','Ana','Andres','Sofia'];

unset($array4[1]);




