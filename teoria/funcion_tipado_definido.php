<?php

declare(strict_types=1);

function sumarEnteros(int $entero1, int $entero2): int | float {
    $resul = ($entero1 + $entero2)/2;
    return $resul;
}

echo sumarEnteros(5,10);







