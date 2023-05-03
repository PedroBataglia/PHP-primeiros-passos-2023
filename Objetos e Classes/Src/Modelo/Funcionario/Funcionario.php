<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Pessoa;

class Funcionario extends Pessoa
{


    private string $cargo;
    private float $salario;


    public function __construct(string $nome, Cpf $cpf, string $cargo, float $salario)
    {
        Parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
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

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }

}
