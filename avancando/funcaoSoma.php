<?php

function soma($numA, $numB) {
    return $numA + $numB;
}

$somandoNumeros = soma(2, 2);

echo $somandoNumeros.PHP_EOL;

function tabuada($num) {
    for ($i = 1; $i < 11; $i++) {
        $total = $i * $num;
        echo "$i x $num = $total".PHP_EOL;
    }
}

tabuada($somandoNumeros);

function fatorial($num) {
    $total = $num;
    for ($i = $num; $i > 1; $i--) {
        $total *= ($i - 1);
    }
    echo $total;
}

fatorial(9);
