<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{



    private float $salario;


    public function __construct(string $nome, Cpf $cpf,  float $salario)
    {
        Parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }
    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function recuperaSalario()
    {
        return $this->salario;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo";
            return;
        }
            $this->salario += $valorAumento;
    }

    abstract public function calculaBonificacao(): float;

}
