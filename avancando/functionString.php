<?php

function escreverNome($nome) {
    echo "Meu nome é $nome".PHP_EOL;
}

escreverNome("Pedro");

$pessoa = [
  'nome' => 'Pedro',
  'idade' => 19,
  'relacionamento' => 'solteiro',
  'profissao' => 'programador',
];

function exibeArray($lista) {
    foreach ($lista as $item) {
        echo "$item".PHP_EOL;
    }
}
exibeArray($pessoa);
