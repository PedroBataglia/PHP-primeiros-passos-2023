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
    echo "Sim, isso é um array".PHP_EOL;
} else {
    echo "Isso não é um array".PHP_EOL;
}


function funcao(array $valor) {
    for ($i = 0; $i < count($valor); $i++) {
        echo $valor[$i];
    }
}

var_dump(array_is_list($notas));
