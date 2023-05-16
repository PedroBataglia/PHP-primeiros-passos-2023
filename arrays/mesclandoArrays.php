<?php

$listaFrutas1 = array(
    'p' => 'Pimenta',
    'b' => 'Banana',
    'a' => 'Abacate',
    'l' => 'Limao'
);

$listaFrutas2 = array(
    'p' => 'pimentao',
    'b' => 'beterraba',
    'a' => 'abobora',
    'l' => 'lacos'
);

$listaDeFrutas = array_merge($listaFrutas1, $listaFrutas2);
print_r($listaDeFrutas);

$listaDeTodasAsFrutas = array_merge_recursive($listaFrutas1, $listaFrutas2);
print_r($listaDeTodasAsFrutas);
