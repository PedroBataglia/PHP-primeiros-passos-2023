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

$listaDeTodasFrutas = array_merge($listaFrutas1, $listaFrutas2);
print_r($listaDeTodasFrutas);
