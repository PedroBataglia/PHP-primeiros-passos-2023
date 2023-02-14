<?php

$notas = [
    'Ana' => '10',
    'João' => '8',
    'Pedro' => '9',
    'Miguel' => '6',
    'Felipe' => '7',
];

echo "Alguém tirou 10?".PHP_EOL;
var_dump(in_array(10, $notas));

// array_key_exists = verifica se a chave existe

// in_array = verifica se o valor está presente naquele array

// inset = verifica se a chave existe e o valor não é nullo
