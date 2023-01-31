<?php


$idadeLista  = array(23, 43, 53, 16, 18, 17, 23, 22, 21, 32);
//             0    1  2   3   4   5   6   7   8    9
$listaIdade = [23, 43, 53, 16, 18, 17, 23, 22, 21, 32]; // 10 valores no total

$listaIdade[] = 20;


$umaIdade = $listaIdade[2];

echo $umaIdade;
foreach($listaIdade as $idade) {
    echo $idade.PHP_EOL;
}
