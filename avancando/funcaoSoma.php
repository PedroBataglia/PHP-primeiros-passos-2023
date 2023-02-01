<?php

$notas = [9, 10, 9, 7];

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
    echo $total.PHP_EOL;
}

fatorial(9);


function potencia($num, $expoente) {
    $total = $num ** $expoente;
    echo $total;
}

potencia(2, 32);

function media($nota) {
        $soma = 0;
    for ($i = 0; $i < count($nota); $i++) {
        $soma += $nota[$i];
    }
    $media = $soma / count($nota);
    echo "com base nas notas sua média é $media";
}

media($notas);
