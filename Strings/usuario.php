<?php

$email = 'ana@alura.com.br';
$senha = 'áááííí';

if (mb_strlen($senha) >= 8) {
    echo "Sua senha é valida".PHP_EOL;
} else {
    echo "Sua senha está incompleta, por favor tente outra".PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

$usuario = mb_substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario).PHP_EOL;
echo substr($email, $posicaoDoArroba +1).PHP_EOL;
