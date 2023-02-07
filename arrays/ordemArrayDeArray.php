<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Pedro',
        'nota' => 9,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 7,
    ],
];

function ordenaNotas(array $nota1, array $nota2): int
{
    if ($nota1['nota'] > $nota2['nota']) {
        return -1;
    }
    if ($nota1['nota'] < $nota2['nota']) {
        return 1;
    }
    return 0;
};

usort($notas, 'ordenaNotas');
var_dump($notas);


