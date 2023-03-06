<?php

$nomeCompleto = 'Pedro Petretti';

$espaco = strpos($nomeCompleto, ' ');

echo substr($nomeCompleto, 0, $espaco).PHP_EOL;
echo substr($nomeCompleto, $espaco + 1);
