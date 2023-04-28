<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

class  Titular extends Pessoa
{

    private Endereco $endereco;


    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {

        Parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }



    public function recuperarNome(): string
    {
        return $this->nome;
    }



    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}
