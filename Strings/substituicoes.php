<?php

$texto = "Texto com qualquer coisa poha e caralho, cu";
$antiMonark = str_replace(
    ['poha', 'caralho', ],
    ['p', 'c'],
    $texto);

echo $antiMonark;
