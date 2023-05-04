<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor, EditorVideo};

$umFuncionario = new Desenvolvedor(
    'Pedro',
    new Cpf('123.321.231-90'),
    1000
);

$umEditor = new EditorVideo(
    'Luiz Gonsalves',
    new Cpf('324.545.645.09'),
    1500
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Ana Clara',
    new Cpf('123.543.434-84'),
    2000);

$umDiretor = new Diretor(
    'Augusto',
    new Cpf('123.432.564.23'),
    4000);

$umDesenvolvedor = new Desenvolvedor(
    'Carlos',
    new Cpf('342.532.234.32'),
    8000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);
echo $controlador->recuperaTotal();
