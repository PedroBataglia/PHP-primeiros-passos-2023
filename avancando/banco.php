<?php

function exibeMensagem($mensagem)
{
    echo $mensagem.PHP_EOL;
}


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


  if ($valorSaque > $contasCorrentes['32423423']['saldo']) {
      echo "não é possível realizar o saque, você não tem saldo suficiente".PHP_EOL;
  } else {
      $contasCorrentes['32423423']['saldo'] -= $valorSaque;
      echo "Saque realizdo no valor de $valorSaque, valor atual de saldo: ".$contasCorrentes['32423423']['saldo'].PHP_EOL;
  }
foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf ${conta['titular']} ${conta['saldo']}"
    );
}
