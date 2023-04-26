<?php

require_once 'Src/classe.php';
require_once 'Src/Titular.php';
require_once 'Src/Cpf.php';
require_once 'Src/Endereco.php';

$endereco = new Endereco('São Paulo - Sp', 'Pq. São Rafael', 'Coruqueamas', '166');
$Pedro = new Titular((new Cpf('123.123.123.43')), 'Pedro Henrique', $endereco);
$primeiraConta = new Conta($Pedro);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok
echo $primeiraConta->recuperarSaldo(); // isso não é ok
//$segundaConta = new Conta(new Titular('Mar', '854.534.234.34'));


var_dump($primeiraConta);
//var_dump($segundaConta);
echo Conta::recuperarNumeroDeContas();
