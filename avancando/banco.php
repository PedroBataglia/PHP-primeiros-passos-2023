<?php
// include ou require
require 'funcao.php';

$contasCorrentes = [
    '23094293' => [
        'titular' => 'Pedro',
        'saldo' => 1000,
        'salario' => 1500,
        'profissao' => 'programador',
    ],
    '32423423' => [
        'titular' => 'Vinicius',
        'saldo' => 5000,
        'salario' => 7000,
        'profissao' => 'desenvolvedor'
    ],
    '287348972' => ['titular' => 'Marcos',
        'saldo' => 1500,
        'salario' => 3000,
        'profissao' => 'medico',]
];
$valorSaque = 500;

$contasCorrentes['32423423'] =  sacar( $contasCorrentes['32423423'], 500);

$contasCorrentes['23094293'] = depositar( $contasCorrentes['23094293'], 300);

titularComLetraMaiuscula($contasCorrentes['23094293']);

unset($contasCorrentes['287348972']);

foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem(
        "$cpf $titular $saldo"
    );
}
