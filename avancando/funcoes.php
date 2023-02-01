<?php

function exibeMensagem($mensagem) {
    echo $mensagem.PHP_EOL;
}

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


if ($valorSaque > $contasCorrentes['32423423']['saldo']) {
    exibeMensagem("não é possível realizar o saque, você não tem saldo suficiente");
} else {
    $contasCorrentes['32423423']['saldo'] -= $valorSaque;
    exibeMensagem("Saque realizdo no valor de $valorSaque, valor atual de saldo: " . $contasCorrentes['32423423']['saldo']);
}
foreach ($contasCorrentes as $conta) {
    exibeMensagem($conta['titular']);
    exibeMensagem($conta['saldo']);
    exibeMensagem($conta['profissao']);
    exibeMensagem('-=-=-=-=-=-=-=-=-=-=-');
}


