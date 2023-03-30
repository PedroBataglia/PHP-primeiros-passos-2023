<?php

require_once 'Src/classe.php';

$primeiraConta = new Conta();
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok
$primeiraConta->definirCpfTitular('123.453.353-09');
$primeiraConta->definirNomeTitular('Pedro Petretti');
echo $primeiraConta->recuperarSaldo(); // isso não é ok


var_dump($primeiraConta);
