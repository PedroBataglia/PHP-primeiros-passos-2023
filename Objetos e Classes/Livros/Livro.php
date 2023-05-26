<?php

namespace Livraria;

class Livro
{
    protected string $nome;
    protected string $autor;
    protected float $nota;
    protected float $anoLancamento;

    public function __construct(string $nome, string $autor , float $anoLancamento, float $nota)
    {
        $this->nome = $nome;
        $this->autor = $autor;
        $this->nota = $nota;
        $this->anoLancamento = $anoLancamento;
    }

}
