<?php

require_once 'Src/classe.php';
require_once 'Src/Titular.php';

$primeiraConta = new Conta(new Titular('Pedro Henrique', '123.321.231.23'));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok
echo $primeiraConta->recuperarSaldo(); // isso não é ok
$segundaConta = new Conta(new Titular('Mar', '854.534.234.34'));


var_dump($primeiraConta);
var_dump($segundaConta);
echo Conta::recuperarNumeroDeContas();
