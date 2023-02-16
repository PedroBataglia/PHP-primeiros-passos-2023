<?php
$alunos2022 = [
    'Pedro',
    'Maria',
    'João',
    'Julia' ,
    'Felipe',
];

$novosAlunos = [
    'Paulo',
    'José',
    'Matheus',
    'Ana',
];

$alunos2023 = [...$alunos2022, ...$novosAlunos];
array_push($alunos2023, 'Alice', 'Bob', 'Nicolas');

echo array_shift($alunos2023).PHP_EOL;

echo array_pop($alunos2023).PHP_EOL;

var_dump($alunos2023);
