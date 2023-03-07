<?php

$nomeCompleto = 'Pedro Henrique Petretti Bataglia';

$espaco = strpos($nomeCompleto, ' ');

//echo substr($nomeCompleto, 0, $espaco).PHP_EOL;
//echo substr($nomeCompleto, $espaco + 1);

var_dump(explode(' ', $nomeCompleto));
$nomeItaliano = explode(' ', $nomeCompleto);

echo "$nomeItaliano[0] $nomeItaliano[3]";
