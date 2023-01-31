<?php


$carrosNovos = [
    '123094' => [
        'marca' => 'Ferrari',
        'modelo' => 'F389',
        'ano' => 2018,
        'motor' => 'v8',
    ],
    '343242' => [
        'marca' => 'Fiat',
        'modelo' => 'Fiat 147',
        'ano' => 2007,
        'motor' => 'v2'
    ],
    '342323' => [
        'marca' => 'volkswagen',
        'modelo' => 'Cross',
        'ano' => 2017,
        'motor' => 'v7'
    ],
];

$carrosNovos['323422'] = [
    'marca' => "Lamburguini",
    'modelo' => "elementor",
    'ano' => 2022,
    'motor' => 'v9',
];

foreach ($carrosNovos as $num => $carro) {
    echo " Modelo de número $num:" . PHP_EOL;
    echo $carro['modelo'] . PHP_EOL;
    echo $carro['ano'] . PHP_EOL;
    echo $carro['motor'] . PHP_EOL;

}
