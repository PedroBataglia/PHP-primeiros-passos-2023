<?php

$idade = 15;
$numeroDePessoas = 2;

echo "Para entrar é necessário ter mais de 18 anos ou ";
echo " se você tiver mais de 16 anos e estiver acompanhado". PHP_EOL;
if ($idade >= 18)
    echo "Você tem $idade anos. Pode entrar!";
else if ($idade >= 16 && $numeroDePessoas > 1)
    echo "Você tem $idade anos mas está acompanhado(a), então pode entrar";
else
    echo "Você só tem $idade anos, você não pode entrar!";

echo PHP_EOL."Adeus";
