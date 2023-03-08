<?php

function boasVindas(string $name, string $profissao, float $salario)
{
    $mensagem = <<<FNIAL
Olá, $name, seja bem-vindo!

Você foi contratado pela Hyle Tecnology and colsulting
para a vaga de $profissao, com o salário de $salario.

Você começa no dia 02/06,
    {assinado}
FNIAL;

    echo $mensagem;

}

function empresaNova(string $empresaNome, string $empresaLocal, string $empresaDiretor)
{
    $mensagemEmpresa = <<<FINAL
Olá $empresaDiretor, dono da empresa $empresaNome.

Gostariamos de propor a construção de uma nova filial no $empresaLocal
Nos retorne o mais rápido possível.

FINAL;

    echo $mensagemEmpresa;
}

empresaNova('Hyle', 'Rua Krypiton 1390', 'Kleber');


