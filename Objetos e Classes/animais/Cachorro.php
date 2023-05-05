<?php

namespace Animais;

use Animais\Humano;

class Cachorro
{
    protected string $nome;
    protected Humano $humano;
    protected string $raca;
    protected float $idade;
    protected float $peso;

    public function __construct(string $nome, Humano $humano, string $raca, float $idade, float $peso)
    {
        $this->nome = $nome;
        $this->humano = $humano;
        $this->raca = $raca;
        $this->idade = $idade;
        $this->peso = $peso;
    }


    public function definirNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function recuperaNome()
    {
        return $this->nome;
    }

    public function definirRaca(string $raca): void
    {
        $this->raca = $raca;
    }

    public function recuperaRaca()
    {
        return $this->raca;
    }


    public function definirIdade(float $idade): void
    {
        $this->idade = $idade;
    }

    public function recuperaIdade()
    {
        return $this->idade;
    }

    public function definirPeso(float $peso): void
    {
        $this->peso = $peso;
    }

    public function recuperaPeso()
    {
        return $this->peso;
    }

    public function __toString(): string
    {
        return "nome: $this->nome, raça: $this->raca, idade: $this->idade, peso: $this->peso kg";
    }
}
