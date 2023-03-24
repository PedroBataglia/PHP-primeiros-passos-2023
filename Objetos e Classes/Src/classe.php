<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTItular;
    public  float $saldo;

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
}
