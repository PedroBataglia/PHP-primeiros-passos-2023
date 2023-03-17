<?php

$telefones = ['(24) 99999 - 9999', '(21) 99999 - 9999', '(24) 99999 - 9999'];

foreach ($telefones as $telefone) {
    $regax = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';
    $telefoneValido = preg_match(
        $regax,
        $telefone,
        $correspondencia
    );


    if ($telefoneValido) {
        echo 'Telefone válido'.PHP_EOL;
    } else {
        echo 'Telefone válido'.PHP_EOL;
    }

    echo preg_replace(
        $regax,
        '(XX) \2',
        $telefone
    ).PHP_EOL;

}


