<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor};

$umFuncionario = new Desenvolvedor(
    'Pedro',
    new Cpf('123.321.231-90'),
    'Programador',
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Ana Clara',
    new Cpf('123.543.434-84'),
    'Gerente',
    2000);

$umDiretor = new Diretor(
    'Augusto',
    new Cpf('123.432.564.23'),
    'Diretor',
    4000);

$umDesenvolvedor = new Desenvolvedor(
    'Carlos',
    new Cpf('342.532.234.32'),
    'Desenvolvedor',
    8000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
echo $controlador->recuperaTotal();
