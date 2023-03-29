<?php

require_once 'Src/classe.php';

$primeiraConta = new Conta();
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok
echo $primeiraConta->recuperarSaldo(); // isso não é ok
