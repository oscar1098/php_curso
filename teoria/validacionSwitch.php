<?php
    // if (isset($_POST["enviando"])){
    //     $edad = $_POST["edad_usuario"];
    //     $nombre = $_POST["nombre_usuario"];
    //     switch ($nombre){
    //         case "Juan":
    //             echo "Usuario autorizado. Hola Juan";
    //             break;
    //         case "Maria";
    //             echo "Usario atorizado. Hola Maria";
    //             break;
    //         case "Pedro";
    //             echo "Usario atorizado. Hola Pedro";
    //             break;
    //         default:
    //             echo "Usuario no autorizado";
    //     }
    // }

    if (isset($_POST["enviando"])){
        $edad = $_POST["edad_usuario"];
        $nombre = $_POST["nombre_usuario"];
        switch (true){
            case $nombre == "Juan" && $edad == 18:
                echo "Usuario autorizado. Hola Juan";
                break;
            case $nombre == "Maria" && $edad == 18;
                echo "Usario atorizado. Hola Maria";
                break;
            case $nombre == "Pedro" && $edad == 18;
                echo "Usario atorizado. Hola Pedro";
                break;
            default:
                echo "Usuario no autorizado";
        }
    }
?>