<?php

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoDoArquivo = str_replace("Livraria\\", "", $nomeCompletoDaClasse);
    $caminhoDoArquivo .= '.php';

   if (file_exists($caminhoDoArquivo)) {
       require_once $caminhoDoArquivo;
   }
});
