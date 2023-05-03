<?php

namespace Funcionarios\Cargo;

class Gestor extends Cargo
{

    public function publicar(string $mensagem)
    {
        echo "Você é um gestor ${mensagem}";
    }
}
