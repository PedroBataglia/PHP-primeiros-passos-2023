<?php


$string = <<<FINAL
Uma linha 
Outra linha 
etc
FINAL;

echo $string.PHP_EOL;

function geraEmail(string $nome): void
{
    $conteudoEmail = <<<FINAL
    Olá, $nome!

    Estamos entrando em contato para
    {motivo  do contato}

   {assinatura}
   FINAL;

    echo $conteudoEmail;
}

geraEmail('Pedro');
