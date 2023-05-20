<?php

//  ? BREAK
for ($i = 1; $i <= 20; $i++){

    if ($i == 11){
        break;
    }
    echo "$i <br>";
};

echo "<br><hr><br>";
//? CONTINUE

for ($i = 1; $i <= 20; $i++){

    if ($i == 7 || $i == 15){
        die();
    }
    echo "$i <br>";
};

// * Para terminar el programa se usa die() o exit()