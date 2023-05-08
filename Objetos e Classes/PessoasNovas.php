<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Pessoa, Cpf};

$novaPessoa = new Pessoa('Pedro', new Cpf('123.123.123-32'));

echo $novaPessoa->nome;
