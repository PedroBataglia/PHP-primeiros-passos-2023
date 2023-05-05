<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$umEndereco = new Endereco('São João', 'Manuel Nobrega', 'Gonsalves', '123');
$outroEndreco = new Endereco('Rio', 'Centro', 'Silveira', '498');

echo $umEndereco.PHP_EOL;

/**
 * @var TYPE_NAME $umEndereco
 */
$umEndereco->cidade = "paraiso";
echo $umEndereco->cidade;

