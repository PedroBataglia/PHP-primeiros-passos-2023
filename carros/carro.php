<?php

function criarCarro(string $nome, string $marca, float $ano, string $dono): array
{
    return [
        'modelo' => $nome,
        'marca' => $marca,
        'ano' => $ano,
        'titular' => $dono
    ];
};
