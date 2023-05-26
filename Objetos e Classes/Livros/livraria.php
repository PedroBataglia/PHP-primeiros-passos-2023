<?php

require_once 'Livro.php';

use Livraria\Livro;


$novoLivro = new Livro('O nome do Vento', 'Pratick Rothfuss', 2011, 10);

var_dump($novoLivro);
