<?php

$carro1 = [
    'marca' => 'Ferrari',
    'modelo' => 'F389',
    'ano' => 2018,
    'motor' => 'v8',
];

$carro2 = [
    'marca' => 'Fiat',
    'modelo' => 'Fiat 147',
    'ano' => 2007,
    'motor' => 'v2'
];

$carro3 = [
    'marca' => 'volkswagen',
    'modelo' => 'Cross',
    'ano' => 2017,
    'motor' => 'v7'
];

$carrosNovos = [$carro1, $carro2, $carro3];

foreach ($carrosNovos as $carro) {
    echo $carro['modelo'].PHP_EOL;
    echo $carro['ano'].PHP_EOL;
    echo $carro['motor'].PHP_EOL;
}
