<?php

$idadeLista = [13, 15, 17, 14, 17, 18, 15];

list($idadePedro, $idadeLucas, $idadeCarla) = $idadeLista;

$listaIdades = [$idadePedro, $idadeLucas, $idadeCarla];

foreach ($listaIdades as $idades) {
    echo $idades.PHP_EOL;
}
