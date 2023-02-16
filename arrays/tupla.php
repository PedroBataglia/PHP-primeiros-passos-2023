<?php

$dados = [
    'nome' => 'Pedro',
    'idade' => 19,
    'salario' => 1500,
];

// list('nome' => $nome, 'idade' => $idade, 'salario' => $salario) = $dados;
extract($dados);
var_dump($nome, $idade);

var_dump(compact('nome', 'idade', 'salario'));
