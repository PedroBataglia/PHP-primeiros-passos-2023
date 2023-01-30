<?php

$peso = 71;
$altura = 1.77;

$imc = $peso/ ($altura ** 2);

echo "Meu imc é: $imc".PHP_EOL;
if ($imc > 25 ) {
    echo "Você está com sobrepeso";
} elseif ($imc > 18 ) {
    echo "Você está no peso ideal";
}
