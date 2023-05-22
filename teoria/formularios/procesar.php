<?php

$nombre = $_REQUEST['name'];
$edad = $_REQUEST['edad'];
$sexo = $_REQUEST['sexo'];
$roles = $_REQUEST['roles'];
$sexo2 = $_REQUEST['sexo2'];
$mensaje = $_REQUEST['mensaje'];

$image = $_FILES['image'];
$patch = $_SERVER['DOCUMENT_ROOT'] . '/php_curso/teoria/formularios/imagenes' . '/' . $image['name'];

echo "<p>El nombre del usuario es: $nombre</p>";
echo "<p>La edad del usuario es: $edad</p><br>";
echo "<p>El sexo del usuario es: $sexo</p><br>";
echo "<p>El sexo del usuario es: $sexo2</p><br>";
echo "<p>Roles: </p>";

echo "<ul>";
    foreach ($roles as $rol) {
        echo "<li>$rol</li>";
    }
echo "</ul>";

echo "<p>Mensaje</p>";
echo "<p>$mensaje</p>";

var_dump($image);

move_uploaded_file($image['tmp_name'], $patch);
// ---------------------------------------------------

// echo "<br><hr><br>";

// $nombre2 = $_POST['name2'];

// echo "<p>El nombre del usuario es: $nombre2</p>";

// ---------------------------------------------------
// echo "<br><hr><br>";

// $nombre2 = $_REQUEST['name2'];

// echo "<p>El nombre del usuario es: $nombre2</p>";

// ---------------------------------------------------
