<?php

namespace Msi;

use Msi\LineUp;
use Msi\Titulos;

class Time
{
    protected string $nome;
    protected Titulos $titulos;
    protected LineUp $lineUp;

    public function __construct(string $nome, Titulos $titulos, LineUp $lineUp)
    {
        $this->nome = $nome;
        $this->titulos = $titulos;
        $this->lineUp = $lineUp;
    }

}
