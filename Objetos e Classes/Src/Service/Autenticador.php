<?php

namespace Alura\Banco\Service;

use Alura\Banco\MOdelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha)
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "Ok. Usuário logado no sistema!";
        } else {
            echo "Ops. Senha incorreta.";
        };
    }
}
