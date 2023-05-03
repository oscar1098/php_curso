<?php
    if (isset($_POST["enviando"])){
        $edad = $_POST["edad_usuario"];
        // if ($edad < 18)
        // echo "Echo eres menor de edad no tienes acceso";
        // else{
        // echo "Eres mayor de edad puedes acceder";
        // }

        echo $edad<18 ? "Eres menor de edad no puedes acceder" : "Puedes acceder";
    }
?>