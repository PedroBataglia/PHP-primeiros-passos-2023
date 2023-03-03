<?php

$url = "https://alura.com.br";



if (str_starts_with($url, 'https')) {
    echo "$url é um endereço válido".PHP_EOL;
} else {
    echo "$url não é uma conexão segura".PHP_EOL;
}

if (str_ends_with($url, "br")) {
    echo "$url é um site nacional".PHP_EOL;
} else {
    echo "$url é um site internacional".PHP_EOL;
}
