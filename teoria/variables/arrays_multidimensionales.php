<?php

$dato = [
    [
        'nombre' => 'Oscar',
        'email' => 'oscaradila1098@gmail.com',
        'celular' => 3157618908
    ],
    [
        'nombre' => 'Ana',
        'email' => 'ana1098@gmail.com',
        'celular' => 3187618908
    ],
    [
        'nombre' => 'Andrea',
        'email' => 'andrea1098@gmail.com',
        'celular' => 3207618908
    ]
    
    ];

    // echo $dato[2]['nombre'];

foreach ($dato as $item) {
    echo $item['nombre'] . "<br>";
    echo $item['email'] . "<br>";
    echo $item['celular'] . "<br>";
}