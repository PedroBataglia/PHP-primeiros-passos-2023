<?php


$conta1 = [
    'titular' => 'Pedro',
    'saldo' => 1000,
    'salario' => 1500,
    'profissao' => 'programador',
];
$conta2 = [
    'titular' => 'Vinicius',
    'saldo' => 5000,
    'salario' => 7000,
    'profissao' => 'desenvolvedor'
];

$conta3 = [
    'titular' => 'Marcos',
    'saldo' => 1500,
    'salario' => 3000,
    'profissao' => 'medico',
];

$contasCorrentes = [$conta1, $conta2, $conta3];

foreach ($contasCorrentes as $conta) {
    echo $conta['titular'].PHP_EOL;
    echo $conta['saldo'].PHP_EOL;
    echo $conta['profissao'].PHP_EOL;
    echo "-=-=-=-=-=-=-=-=-=-=-=-".PHP_EOL;
}
