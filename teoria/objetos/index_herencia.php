<?php

require_once("./herencia.php");

$peruano = new Peruano;

$chileno = new Chileno;

$peruano -> setNombre("OScar MAuricio");

$chileno -> setApellidos('Ardila','Barrios');
$peruano -> setApellidos('Roman','ORTega');

echo $chileno -> getApellidos();
echo $peruano -> getApellidos();
// var_dump($peruano);

// var_dump($chileno);