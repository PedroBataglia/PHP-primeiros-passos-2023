<?php
$nome = 'Pedro Vitor';

$ehDaMinhaFamilia = str_contains($nome, 'Henrique');

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha familia".PHP_EOL;
} else {
    echo "$nome Não é da minha familia".PHP_EOL;
}
//var_dump(str_contains($nome, 'Pedro'));
