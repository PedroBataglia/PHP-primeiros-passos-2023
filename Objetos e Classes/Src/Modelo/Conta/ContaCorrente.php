<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    public function percentualTarifa(): float
    {
        return 0.05;
    }
    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo Indisponivel";
        } else {
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
        }
    }
}
