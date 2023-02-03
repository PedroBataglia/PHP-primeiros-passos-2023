<?php

$listaDeLivros = [
    'livro1' => [
        'Nome' => 'O nome do vento',
        'Autor' => 'Patrick Rothfuss',
        'Ano' =>  2010,
        'Nota' => 10,
    ],
    'livro2' => [
        'Nome' => 'Percy Jackson',
        'Autor' => 'Rick Riordan',
        'Ano' => 2005,
        'Nota' => 6,
    ],
    'livro3' => [
        'Nome' => 'Hobbit',
        'Autor' => 'J.R.R. Tolkien',
        'Ano' => 1938,
        'Nota' => 9,
    ]
];

foreach ($listaDeLivros as $num => $livro) {
    echo "$num:".PHP_EOL;
    echo $livro['Nome'].PHP_EOL;
    echo $livro['Autor'].PHP_EOL;
    echo $livro['Ano'].PHP_EOL;
    echo $livro['Nota'].PHP_EOL;
}


