<?php

$lista = [
    0 => 'um',
    1 => 'dois',
    2 => 'três',
];


foreach ($lista as $chave => $item) {
    echo "O valor do indice $chave é: $item".PHP_EOL;

}

echo sizeof($lista);
