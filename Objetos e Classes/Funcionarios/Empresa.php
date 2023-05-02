<?php

namespace Funcionarios;

class Empresa
{
    protected string $nomeEmpresa;
    protected string $missao;
    protected float $valorDeMercado;

    public function __construct(string $nomeEmpresa, string $missao, float $valorDeMercado)
    {
        $this->nomeEmpresa = $nomeEmpresa;
        $this->missao = $missao;
        $this->valorDeMercado = $valorDeMercado;
    }
}
