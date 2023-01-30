<?php

$idade = 19;
$nome = "Pedro";

echo "Você só pode entrar se tiver mais de 18 anos". PHP_EOL;

if ($idade >= 18 && $nome == "Pedro") {
    echo "Você tem $idade anos.". PHP_EOL;
    echo "Pode entrar";
}
