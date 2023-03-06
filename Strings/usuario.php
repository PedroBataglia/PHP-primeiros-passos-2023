<?php

$email = 'ana@alura.com.br';
$senha = '123';

$posicaoDoArroba = strpos($email, '@');

echo substr($email, 0, $posicaoDoArroba).PHP_EOL;
echo substr($email, $posicaoDoArroba +1);
