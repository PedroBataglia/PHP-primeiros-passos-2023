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



;

usort($notas, function (array $nota1, array $nota2): int
{
    return $nota2['nota'] <=> $nota1['nota'];
});
var_dump($notas); 
