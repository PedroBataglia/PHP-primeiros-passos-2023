<?php

namespace Livraria;

use Livraria\Autor;

class Livro
{
    protected string $nome;
    protected Autor $autor;
    protected float $nota;
    protected float $anoLancamento;

    public function __construct(string $nome, Autor $autor , float $anoLancamento, float $nota)
    {
        $this->nome = $nome;
        $this->autor = $autor;
        $this->nota = $nota;
        $this->anoLancamento = $anoLancamento;
    }

}
