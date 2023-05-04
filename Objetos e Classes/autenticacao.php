<?php

require_once 'autoload.php';

use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Cpf;

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    'William',
    new Cpf('342.656.756.34'),
    30000);

$autenticador->tentaLogin($umDiretor, '1234');
