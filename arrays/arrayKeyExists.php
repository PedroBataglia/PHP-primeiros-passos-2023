<?php

$funcionarios = [
    'Diretor' => 'Carlos',
    'Gerente' => 'André',
    'Programador' => 'Samira',
];

if (array_key_exists('Programador', $funcionarios)) {
    echo "Chave existe";
} else {
    echo "Chave não existe";
}
