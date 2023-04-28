<?php

namespace Alura\Banco\Modelo;

class Pessoa
{

    protected $nome;
    protected $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperarCpf();
    }

    protected function validaTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular)< 5) {
            echo "erro, o nome precisa conter mais de 5 caracteres";
            exit();
        }
    }
}
