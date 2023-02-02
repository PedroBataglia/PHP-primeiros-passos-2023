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




