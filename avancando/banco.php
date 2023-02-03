<?php
// include ou require
require 'funcao.php';

$contasCorrentes = [
    '23094293' => [
        'titular' => 'Pedro',
        'saldo' => 1000,
        'salario' => 1500,
        'profissao' => 'programador',
    ],
    '32423423' => [
        'titular' => 'Vinicius',
        'saldo' => 5000,
        'salario' => 7000,
        'profissao' => 'desenvolvedor'
    ],
    '287348972' => ['titular' => 'Marcos',
        'saldo' => 1500,
        'salario' => 3000,
        'profissao' => 'medico',]
];
$valorSaque = 500;

$contasCorrentes['32423423'] =  sacar( $contasCorrentes['32423423'], 500);

$contasCorrentes['23094293'] = depositar( $contasCorrentes['23094293'], 300);

titularComLetraMaiuscula($contasCorrentes['23094293']);

unset($contasCorrentes['287348972']);


echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
    exibeConta($conta);
}
echo "</ul>";
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contas Correntes</title>
</head>
<body>
<h1>Contas Correntes</h1>

<dl>
    <?php foreach ($contasCorrentes as $cpf => $contas) { ?>
        <dt><h3><?php echo $conta['titular']?> - <?php echo $cpf;?></h3></dt>
        <dd> Saldo: <?php echo $conta['saldo'];?></dd>
    <?php } ?>

</dl>
</body>
</html>
