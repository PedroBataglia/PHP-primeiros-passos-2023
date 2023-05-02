<?php

namespace Alura\Banco\Modelo\Conta;



class Conta
{
    private  $titular;
    private  float $saldo = 0;
    private static $numeroDeContas = 0;
    protected int $tipo;


    public function __construct(Titular $titular, int $tipo)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        $this->tipo = $tipo;
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        if (self::$numeroDeContas > 2) {
            echo "Há mais de uma conta ativa";
        }
    }

    public function sacar(float $valorASacar)
    {
        if ($this->tipo === 1) {
            $tarifaDeSaque = $valorASacar * 0.05;
        } else {
            $tarifaDeSaque = $valorASacar * 0.03;
        }
        $valorSaque = $tarifaDeSaque + $valorASacar;
        if ($valorSaque > $this->saldo) {
            echo "Saldo Indisponível";
        } else {
            $this->saldo -= $valorSaque;
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



    public static function recuperarNumeroDeContas(): int
    {
        return Conta::$numeroDeContas;
    }

    public function reperarNomeTitular(): string
    {
        return $this->titular->recuperarNome();
    }

    public function recuperarCpfTitular(): string
    {
        return $this->titular->recuperarCpf();
    }
}

