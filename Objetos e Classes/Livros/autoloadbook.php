<?php

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoDoArquivo = str_replace("Livraria", "", $nomeCompletoDaClasse);
    $caminhoDoArquivo .= '.php';
    var_dump($caminhoDoArquivo);

   if (file_exists($caminhoDoArquivo)) {
       require_once $caminhoDoArquivo;
   }
});
