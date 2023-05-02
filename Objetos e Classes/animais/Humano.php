<?php

namespace Animais;

class Humano
{

    protected string $nome;
    protected float $idade;
    protected string $profissao;

    public function __construct(string $nome, float $idade, string $profissao)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
    }

    public function recuperaNome()
    {
        return $this->nome;
    }

    public function recuperaIdade()
    {
        return $this->idade;
    }

    public function recuperaProfissao()
    {

    }
}
