<?php

class Titular
{
    private $cpf;
    private string $nome;
    private Endereco $endereco;


    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {

        $this->cpf = $cpf;
        $this->validaTitular($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }



    public function recuperarNome(): string
    {
        return $this->nome;
    }

    public function validaTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular)< 5) {
            echo "erro, o nome precisa conter mais de 5 caracteres";
            exit();
        }
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}
