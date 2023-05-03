<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Funcionario\Gerente;

$umFuncionario = new Funcionario(
    'Pedro',
    new Cpf('123.321.231-90'),
    'Agente Comercial',
    1000
);

$umaFuncionaria = new Gerente(
    'Ana Clara',
    new Cpf('123.543.434-84'),
    'Jornalista',
    2000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
echo $controlador->recuperaTotal();
