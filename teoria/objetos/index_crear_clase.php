<?php

require_once('./crear_clase_personas.php');

$persona1 = new Personas("OScar MAuricio", "Ardila BARRios", 23);

// $persona1 -> setNombre("Oscar MAURIcio");
// $persona1 -> apellido = "Ardila";
// $persona1 -> edad = 23;

$persona2 = new Personas("saray","roman otega",21);

// $persona2 -> setNombre('saray');
// $persona2 -> apellido = "Roman";
// $persona2 -> edad = 21;

echo "El nombre de la persona 1 es " . $persona1 -> getNombre();
echo "<br>";
echo "El nombre de la persona 2 es " . $persona2 -> getNombre();








