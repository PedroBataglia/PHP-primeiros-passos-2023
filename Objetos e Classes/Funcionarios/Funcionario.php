<?php

namespace Funcionarios;

use Funcionarios\Time;
use Funcionarios\Cargo;
use Funcionarios\Setor;


class Funcionario
{
    protected string $nome;
    protected float $idade;
    protected string $estadoCivil;
    protected Setor $setor;
    protected Time $time;
    protected Cargo $cargo;

    public function __construct(string $nome, float $idade, string $estadoCivil, Setor $setor, Time $time, Cargo $cargo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->estadoCivil = $estadoCivil;
        $this->setor = $setor;
        $this->time = $time;
        $this->cargo = $cargo;
    }

    public function recuperaNome()
    {
        return  $this->nome;
    }

    public function recuperaIdade()
    {
        return $this->idade;
    }

    public function recuperaEstadoCivil()
    {
        return $this->estadoCivil;
    }

    public function recuperaSetor()
    {
        return $this->setor;
    }

    public function recuperaTime()
    {
        return $this->time;
    }

    public function recuperaCargo()
    {
        return $this->cargo;
    }
}
