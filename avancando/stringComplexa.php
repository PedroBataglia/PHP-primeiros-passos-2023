<?php

// show all errors
error_reporting(E_ALL);

$square = [
    'hight' => '100',
    'width' => 50,
];


$great = 'fantastic';

// Não funciona, vai exibir: This is { fantastic }
echo "This is { $great }";

// funciona, vai exibir: This is fantastic
echo "This is ${great}";
// sintaxe similar a python

echo "This square is {$square->width}00 centimeters broad.";
