<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTItular;
    private  float $saldo = 0;

    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo Indisponível";
        } else {
            $this->saldo -= $valorASacar;
        }
    }

    public function depositar(float $valorADepositar)
    {
        if($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
        } else {
            $this->saldo += $valorADepositar;
        }
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

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }
}

