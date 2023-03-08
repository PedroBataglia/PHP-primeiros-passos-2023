<?php

$texto = "Texto com qualquer coisa poha e caralho";
$antiMonark = str_replace('poha', '***', $texto);

echo $antiMonark;
