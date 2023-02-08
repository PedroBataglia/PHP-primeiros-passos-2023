<?php


$notas = [
    'Ana' => '10',
    'João' => '8',
    'Pedro' => '9',
    'Miguel' => '6',
    'Felipe' => '7',
];

ksort($notas);
var_dump($notas);

if (gettype($notas) === 'array') {
    echo "Sim, isso é um array";
} else {
    echo "Isso não é um array";
}
