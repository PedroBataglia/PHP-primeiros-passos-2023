<?php

$notas = [
    'Ana' => '10',
    'João' => '8',
    'Pedro' => '9',
    'Miguel' => '6',
    'Felipe' => '7',
];

echo "Quem tirou 10?".PHP_EOL;
echo array_search(10, $notas);
