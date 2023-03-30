<?php

class Cachorro
{
    private string $nome;
    private string $raca;
    private string $barulho;
    private float $idade;
    private float $peso;


    public function definirNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function definirRaca(string $raca): void
    {
        $this->raca = $raca;
    }

    public function definirBarulho(string $barulho): void
    {
        $this->barulho = $barulho;
    }

    public function definirIdade(float $idade): void
    {
        $this->idade = $idade;
    }

    public function definirPeso(float $peso): void
    {
        $this->peso = $peso;
    }

    public function fazerBarulho()
    {
        echo $this->barulho;
    }
}
