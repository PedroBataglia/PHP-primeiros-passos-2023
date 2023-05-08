<?php

namespace Alura\Banco\Modelo;

/**
 * @property-read $nome
 * @property-read $cpf
 */
class Pessoa
{
    use AcessoPropriedades;

    protected $nome;
    protected $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNome($nome);
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

    final protected function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular)< 5) {
            echo "erro, o nome precisa conter mais de 5 caracteres";
            exit();
        }
    }
}
