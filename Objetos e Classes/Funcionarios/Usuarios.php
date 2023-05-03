<?php

require_once 'autoload.php';

use Funcionarios\Funcionario;
use Funcionarios\Setor;
use Funcionarios\Empresa;
use Funcionarios\Time;
use Funcionarios\Cargo\Cargo;
use Funcionarios\Cargo\Gestor;

$novoFuncionario = new Funcionario('Pedro', 19, 'solteiro',
    new Setor('Financeiro',
        new Empresa('Dionisios', 'Fazer festas',140000), 'Roger'),
    new Time('1', 1),
    new Gestor('Programador', '2', '1800'));

var_dump($novoFuncionario);
$novoFuncionario->recuperaCargo()->publicar("Eu sou um gestor");

