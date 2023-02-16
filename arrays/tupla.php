<?php

$dados = [
    'nome' => 'Pedro',
    'idade' => 19,
    'salario' => 1500,
];

list('nome' => $nome, 'idade' => $idade, 'salario' => $salario) = $dados;

var_dump($nome, $idade);
