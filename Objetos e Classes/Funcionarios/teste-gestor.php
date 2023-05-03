<?php

require_once "autoload.php";

use Funcionarios\Funcionario;
use Funcionarios\Cargo\Cargo;
use Funcionarios\Cargo\Gestor;

$novoGestor = new Gestor('Gestor', 2, '3000');
$novoGestor->publicar('Eu sou um gestor');
