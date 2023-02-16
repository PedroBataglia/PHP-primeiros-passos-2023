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

var_dump($alunos2023);
