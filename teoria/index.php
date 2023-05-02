<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .resaltar{
            color:blueviolet;
            font-weight: bold;
        }
        h1{
		    text-align:center;
	    }

	    table{
		    background-color:#FFC;
		    padding:5px;
		    border:#666 5px solid;
	    }
	
	    .no_validado{
		    font-size:18px;
		    color:#F00;
		    font-weight:bold;
	    }
	
	    .validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	    }
    </style>
</head>
<body>

<h1>USANDO OPERADORES COMPARACIÓN</h1>

<form action="./index.php" method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>Nombre:</td>
      <td><label for="nombre_usuario"></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td>Edad:</td>
      <td><label for="edad_usuario"></label>
      <input type="text" name="edad_usuario" id="edad_usuario"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>
    

<?php

    echo "<br><br>";

    // Esto es un comentario sencillo
    echo "Bienvenidos al curso PHP <br> con"; // Esto es un comentario sencillo
    print "Hola mundo <br>";
    echo "Hasta la proxima <br>";
    /*
     Esto es un comentario multilinea
     Esto es un comentario multilinea
     Esto es un comentario multilinea
     Esto es un comentario multilinea
     Esto es un comentario multilinea
     */

     echo "<br><br>";
    //? Variables
    
    echo "VARIABLES";
    echo "<br><br>";
    $nombre = "Oscar";
    $edad = 23;
    print "El nombre del usuario es " . $nombre;
    echo "<br>La edad es " . $edad;
    echo "<br>",$edad,$nombre,'La edad es';
    echo "<br><br>";

    //? flujo de codigo - llamar codigo externo

    echo "FLUJO DE CODIGO";
    echo "<br><br>";
    echo "Este es el primer mensaje<br>";
    include("ProporcionaDatos.php");
    dameDatos();
    echo "<br>Este es el segundo mensaje";
    echo "<br><br>";

    //? Variables estaticas

    echo "VARIABLES ESTATICAS";
    echo "<br><br>";

    function incrementarValor(){
        static $contador = 0;
        $contador ++;
        echo $contador . "<br>";
    }

    incrementarValor();
    incrementarValor();
    incrementarValor();
    incrementarValor();
    incrementarValor();
    echo "<br><br>";

    //? DECLARAR STRINGS

    echo "DECLARAR STRINGS";
    echo "<br><br>";

    echo "<p class = 'resaltar'>Esto es un ejemplo de frase</p>";

    $variabl1 = "casa";
    $variabl2 = "CASA";
    echo "<br>";

    $resultado = strcmp($variabl1,$variabl2); // Devuelve 1 si no son iguales 0 si son iguales importan mayusclas
    echo $resultado;

    echo "<br>";
    $resultado = strcasecmp($variabl1,$variabl2); // Devuelve 1 si no son iguales 0 si son iguales importan mayusclas
    echo $resultado;
    echo "<br><br>";

    //? OPERADORES DE COMPARACION

    echo "OPERADORES DE COMPARACION";
    echo "<br><br>";

    $variable1 = 8;
    $variable2 = "8";
    $variable3 = "Juan";

    if($variable1 == $variable2){
        
        echo "Son iguales";

    }else{
        echo "No son son iguales";
    }

    echo "<br><br>";

    if($variable1 === $variable2){
        
        echo "Son iguales";

    }else{
        echo "No son son iguales";
    }

    if (isset($_POST["enviando"])){

        $usuario = $_POST["nombre_usuario"];
        $edad = $_POST["edad_usuario"];

        if ($usuario === "Juan") {
            echo "<br><br>";
            echo "Puedes entrar";
        } else {
            echo "<br><br>";
            echo "No puedes entrar";
        }
    }
    echo "<br><br>";

    //? CONSTANTES 

    echo "CONSTANTES";

    echo "<br><br>";

    define("AUTOR","Juan");

    echo AUTOR;
    echo "<br><br>";

    echo "La linea de la instruccion es: " . __LINE__ ;
    
    
  
?>
</body>
</html>