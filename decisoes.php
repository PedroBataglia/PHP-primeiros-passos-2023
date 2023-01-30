<?php

$idade = 17;
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver mais de 18 anos ou";
echo "se tiver 16 anos e estiver acompanhado.". PHP_EOL;
if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if($idade >= 16 && $numeroDePessoas > 1) {
        echo "Você tem $idade anos, está acompanhado(a), então pode entrar";
} else {
    echo "Você só tem $idade anos.".PHP_EOL;
    echo "você não pode entrar!";
}
