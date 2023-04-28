<?php

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new Cpf('123.345.675-74'),
        'Pedro Henrique',
        new Endereco('Tiradentes', 'Vila Ponposa', 'Alameda Soares', '1204')
    )
);

$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperarSaldo();
