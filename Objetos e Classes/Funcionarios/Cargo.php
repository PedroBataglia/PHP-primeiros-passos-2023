<?php

namespace Funcionarios;

class Cargo
{
    protected string $nomeCargo;
    protected string $permissao;
    protected float $salario;

    public function __construct(string $nomeCargo, string $permissao, float $salario)
    {
        $this->nomeCargo = $nomeCargo;
        $this->permissao = $permissao;
        $this->salario = $salario;
    }
}
