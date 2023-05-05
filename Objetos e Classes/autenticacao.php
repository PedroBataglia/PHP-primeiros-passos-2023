<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Cpf;

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    'William',
    new Cpf('342.656.756-34'),
    30000);

$umGerente = new Gerente(
    'Carlos',
    new Cpf('234.645.342-90'),
    4000);

$titularConta = new Titular(
    new Cpf('123.234.534-34'),
    'Roberto',
    new Endereco('São Paulo - Sp',
        'Pq. São Rafael',
        'Coruqueamas',
        '166'));

$autenticador->tentaLogin($umDiretor, '1234');
$autenticador->tentaLogin($umGerente, '4321');
$autenticador->tentaLogin($titularConta, 'abcd');
