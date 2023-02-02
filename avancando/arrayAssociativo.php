<?php

$pessoa1 = [
    'nome' => 'Pedro',
    'idade' => 19,
    'altura' => 1.77,
];

$pessoa2 = [
    'nome' => 'Ana',
    'idade' => 21,
    'altura' => 1.58,
];

$pessoa3 = [
    'nome' => 'José',
    'idade' => 22,
    'altura' => 1.80
];

$pessoas = [$pessoa1, $pessoa2, $pessoa3];

// entrando em todos os elementos 
for ($i = 0; $i < count($pessoas); $i++) {
    foreach ($pessoas[$i] as $pessoa) {
        echo $pessoa.PHP_EOL;
    }
}
