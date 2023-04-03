<?php

class Titular
{
    private string $cpf;
    private string $nome;


    public function __construct(string $cpf, string $nome)
    {

        $this->cpf = $cpf;
        $this->validaTitular($nome);
        $this->nome = $nome;
    }

    public function recuperarCpf(): string
    {
        return $this->cpf;
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
}
