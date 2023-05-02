<?php

require_once 'autoload.php';

use Funcionarios\Funcionario;
use Funcionarios\Setor;
use Funcionarios\Empresa;
use Funcionarios\Time;
use Funcionarios\Cargo;

$novoFuncionario = new Funcionario('Pedro', 19, 'solteiro',
    new Setor('Financeiro',
        new Empresa('Dionisios', 'Fazer festas',140000), 'Roger'),
    new Time('1', 1),
    new Cargo('Programador', '2', '1800'));

var_dump($novoFuncionario->recuperaNome());
var_dump($novoFuncionario->recuperaIdade());
var_dump($novoFuncionario->recuperaEstadoCivil());
var_dump($novoFuncionario->recuperaSetor());
var_dump($novoFuncionario->recuperaTime());
var_dump($novoFuncionario->recuperaCargo());
