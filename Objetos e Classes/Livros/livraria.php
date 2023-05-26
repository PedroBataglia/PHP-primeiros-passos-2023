<?php

require_once 'Livro.php';
require_once 'Livraria/Autor.php';

use Livraria\Livro;
use Livraria\Autor;

$novoLivro = new Livro(
    'O nome do Vento',
    new Autor(
        'Pratick Rothfuss',
        '45',
        'A melodia do sábio' ),
    2011, 10);

var_dump($novoLivro);
