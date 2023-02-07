<?php

require 'lendoLivros.php';

foreach ($listaDeLivros as $livros) {
    echo $livros['Nome'].PHP_EOL;
}
