<?php

namespace Alura\Banco\Modelo;

/**
 * Class Endereco
 * @property-read string $cidade
 * * @property-read string $numero
 * * @property-read string $bairro
 * * @property-read string $rua
 */
class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;


    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function alteraCidade(string $novaCidade): void
    {
        $this->cidade = $novaCidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function alteraBairro(string $novoBairro): void
    {
        $this->bairro = $novoBairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function alteraRua(string $novaRua): void
    {
        $this->rua = $novaRua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }




    public function __toString(): string
    {
        return "$this->rua, $this->bairro, $this->cidade, $this->numero";
    }

    public function __get(string $nomeAtributo)
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo);;
        return $this->$metodo();
    }

    public function __set($nomeAtributo, $valor): void
    {
        $metodo = 'altera' . ucfirst($nomeAtributo);
        $this->$metodo($valor);

    }
}
