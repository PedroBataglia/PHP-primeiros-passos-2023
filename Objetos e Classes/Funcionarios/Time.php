<?php

namespace Funcionarios;

class Time
{
    protected string $id;
    protected float $NumeroDemembros;

    public function __construct(string $id, float $NumeroDeMembros)
    {
        $this->id = $id;
        $this->NumeroDemembros = $NumeroDeMembros + 1;
    }
}

