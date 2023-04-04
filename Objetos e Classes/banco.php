<?php

require_once 'Src/classe.php';
require_once 'Src/Titular.php';
require_once 'Src/Cpf.php';

$titular = new Titular((new Cpf('123.123.123.43')), 'Pedro Henrique');
$primeiraConta = new Conta($titular);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok
echo $primeiraConta->recuperarSaldo(); // isso não é ok
//$segundaConta = new Conta(new Titular('Mar', '854.534.234.34'));


var_dump($primeiraConta);
//var_dump($segundaConta);
echo Conta::recuperarNumeroDeContas();
