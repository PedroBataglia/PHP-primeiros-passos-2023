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

$alunosFaltantes = array_diff_key($notasBimestre, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos =array_values($alunosFaltantes);

var_dump(array_combine($nomesAlunos, $notasAlunos));
