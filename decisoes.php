<?php

$idade = 16;
$nome = "Pedro";

echo "Você só pode entrar se tiver mais de 18 anos ou";
echo "se tiver 16 anos e estiver acompanhado.". PHP_EOL;
if ($idade >= 18 && $nome == "Pedro") {
    echo "Você tem $idade anos.". PHP_EOL;
    echo "Pode entrar";
} else {
    echo "Você só tem $idade anos.".PHP_EOL;
    echo "você não pode entrar!";
}
