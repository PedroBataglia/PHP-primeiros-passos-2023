<?php

$funcionarios = [
    'Pedro' => 'Programador',
    'Maria' => 'advogada',
    'Mario' => 'Médico'
];

$atualizaFuncionarios = [
    'Pedro' => 'Programador',
    'Maria' => 'advogada',
    'Mario' => 'Médico',
    'William' => 'Diretor',
    'Claudio' => 'Presidente',
    'Adriana' => 'Gerente'
];

var_dump(array_diff_key( $atualizaFuncionarios, $funcionarios));
