<?php

$listaFrutas = ['abacate', 'caju', 'manga', 'caqui'];
$listaFrutas2 = ['tomate', 'pera', 'melao'];
$listaFrutas3 = ['limao', 'laranja', 'uva'];

$todasAsFrutas = array_merge($listaFrutas, $listaFrutas2, $listaFrutas3);
print_r($todasAsFrutas);
