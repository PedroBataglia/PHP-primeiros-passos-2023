<?php

namespace Livraria;

class Autor
{
    protected string $nome;
    protected float $idade;
    protected string $otherBooks;

    public function __construct(string $nome, float $idade,  $otherBooks)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->otherBooks = $otherBooks;
    }

}
