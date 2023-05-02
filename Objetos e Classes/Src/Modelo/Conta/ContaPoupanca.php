<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    public function sacar(float $valorASacar)
    {

        $tarifaDeSaque = $valorASacar * 0.03;
        $valorSaque = $tarifaDeSaque + $valorASacar;
        if ($valorSaque > $this->saldo) {
            echo "Saldo Indisponível";
        } else {
            $this->saldo -= $valorSaque;
        }
    }

}
