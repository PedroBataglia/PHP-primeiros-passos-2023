<?php

function exibeMensagem(string $mensagem) {
    echo $mensagem.PHP_EOL;
}

function sacar(array $conta, float $valorSaque) : array
{
    if($valorSaque > $conta['saldo']) {
        exibeMensagem("Não é possível realizar o saque, você não tem saldo suficente");
    } else {
        $conta['saldo'] -= $valorSaque;
        exibeMensagem("Saque realizdo no valor de $valorSaque, valor atual de saldo: ".$conta['saldo']);
    }
    return $conta;
}

function depositar(array $conta, float $valorDeposito): array
{
    if ($valorDeposito < 0) {
        exibeMensagem("O valor mínimo de deposito é 1");
    } else {
        $conta['saldo'] += $valorDeposito;
        exibeMensagem( "Valor de R$$valorDeposito com sucesso, saldo total de $conta[saldo]");

    }
    return $conta;
}

/*$contasCorrentes = [
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
];*/

#$contasCorrentes['32423423'] =  sacar($contasCorrentes['32423423'],500);

#$contasCorrentes['23094293'] = depositar( $contasCorrentes['23094293'], 300);


#if ($valorSaque > $contasCorrentes['32423423']['saldo']) {
 #   exibeMensagem("não é possível realizar o saque, você não tem saldo suficiente");
#} else {
 #   $contasCorrentes['32423423']['saldo'] -= $valorSaque;
  #  exibeMensagem("Saque realizdo no valor de $valorSaque, valor atual de saldo: " . $contasCorrentes['32423423']['saldo']);
#}
foreach ($contasCorrentes as $conta) {
    exibeMensagem($conta['titular']);
    exibeMensagem($conta['saldo']);
    exibeMensagem($conta['profissao']);
    exibeMensagem('-=-=-=-=-=-=-=-=-=-=-');
}



