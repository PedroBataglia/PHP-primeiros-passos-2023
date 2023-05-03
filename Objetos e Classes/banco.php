<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\ContaCorrente;


$endereco = new Endereco('São Paulo - Sp', 'Pq. São Rafael', 'Coruqueamas', '166');
$Pedro = new Titular((new Cpf('123.123.123.43')), 'Pedro Henrique', $endereco);
$primeiraConta = new Conta($Pedro);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok
echo $primeiraConta->recuperarSaldo(); // isso não é ok
//$segundaConta = new Conta(new Titular('Mar', '854.534.234.34'));


var_dump($primeiraConta);
//var_dump($segundaConta);
echo ContaCorrente::recuperarNumeroDeContas();
