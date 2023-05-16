<?php

function mostrarEspanhol(int $numero, string $word)
{
    return "O número {$numero} é chamado de {$word} em Espanhol";
}
function mapEspanhol(int $numero, string $word)
{
    return [$numero => $word];
}


$numeros = [1, 2, 3, 4, 5];
$palavras = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

$resultado = array_map('mostrarEspanhol', $numeros, $palavras);
print_r($resultado);
$geral = array_map('mapEspanhol', $numeros, $palavras);
print_r($geral);
