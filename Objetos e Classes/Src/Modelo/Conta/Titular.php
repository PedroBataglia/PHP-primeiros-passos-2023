<?php

class Titular extends Pessoa
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
