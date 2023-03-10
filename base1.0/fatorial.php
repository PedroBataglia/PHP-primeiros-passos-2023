<?php

$fatorialNum = 8;

function declarer($num) {
    $total = $num;
    for ($valor = $num; $valor > 0; $valor-- ) {
        $total *= ($valor - 1);
    }
}

$valorTotal = declarer($fatorialNum);

print($valorTotal);
