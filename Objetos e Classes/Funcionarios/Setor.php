<?php

namespace Funcionarios;

class Setor
{
    protected string $nomeSetor;
    protected Empresa $empresa;
    protected string $lider;


    public function __construct(string $nomeSetor, Empresa $empresa, string $lider)
    {
        $this->nomeSetor = $nomeSetor;
        $this->empresa = $empresa;
        $this->lider = $lider;
    }

    public function recuperaNomeSetor()
    {
        return $this->nomeSetor;
    }

    public function recuperaEmpresa()
    {
        return $this->empresa;
    }

    public function recuperaLider()
    {
        return $this->lider;
    }
}
