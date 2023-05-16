<?php

function cubo($n)
{
    return ($n * $n * $n);
}

function multForTwo($n)
{
    return ($n * 2);
}

$result = array_map('multForTwo', range(1,7));
print_r($result);


$lista = [1, 2, 3, 4, 5];
$lista2 = array_map('cubo', $lista);
//print_R($lista2);


