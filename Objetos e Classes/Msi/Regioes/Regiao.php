<?php
namespace Msi;

use Msi\Time;

abstract class Regiao
{
    protected string $nome;
    protected string $local;
    protected string $tipo;
    protected  Time $time;

    public function __construct(string $nome, string $local, string $tipo, Time $time)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->local = $local;
        $this->tipo = $tipo;
        $this->time = $time;
    }

    public function recuperaNome()
    {
        return $this->nome;
    }

    public function recuperaLocal()
    {
        return $this->local;
    }

    public function recuperaTipo()
    {
        return $this->tipo;
    }

    public function recuperaTime()
    {
        return $this->time;
    }

    protected function validaNome(string $nomeRegiao)
    {
        if (strlen($nomeRegiao) > 3) {
            echo "O nome da Região deve conter 3 Letras!!";
            exit();
        }
    }

    abstract public function vagasMsi();



}
