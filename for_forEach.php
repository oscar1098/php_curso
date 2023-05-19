<?php

// For

$base = 2;
$expo = 5;
$resul = 1;

for ($i = 1; $i <= $expo; $i++){
    $resul *= $base;
};

echo "$resul";

// For Each

$nombres = ['Victor','Iris','Ana','Oscar'];

foreach ($nombres as $indice => $nombre) {
    echo "$nombre Se econtraba en el indice $indice  <br>";
}