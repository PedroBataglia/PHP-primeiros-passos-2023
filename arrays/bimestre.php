<?php
$notasBimestre = [
    'Ana' => '10',
    'João' => '8',
    'Pedro' => '9',
    'Miguel' => '5',
    'Felipe' =>'7',
];

$notasBimestre2 = [
    'Ana' => '10',
    'João' => '7',
    'Pedro' => '9',
    'Miguel' => '8',
];

echo "Notas diferentes".PHP_EOL;
var_dump(array_diff_assoc($notasBimestre, $notasBimestre2));

echo "Quem faltou a prova".PHP_EOL;
var_dump(array_diff_key($notasBimestre, $notasBimestre2));
