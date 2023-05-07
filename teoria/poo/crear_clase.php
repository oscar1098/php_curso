<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Coche{
            public $ruedas;
            public $color;
            public $motor;

            function __construct(){
                $this->ruedas=4;
                $this->color="";
                $this->motor=1600;
            }

            function arrancar(){
                echo "Estoy arrancando";
            }

            function girar (){
                echo "Estoy girando";
            }

            function frenar(){
                echo "Estoy frenando";
            }

        }

        $renault =  new Coche ();

        $mazda = new Coche();
        
        $seat = new Coche();

        $mazda->girar();
        echo "numero de ruedas $mazda->ruedas";
    ?>
</body>
</html>