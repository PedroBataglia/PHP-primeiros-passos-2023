<?php


$idadeAlunos = [19, 18, 15, 14, 16, 15, 17, 16, 18];
$total = count($idadeAlunos);

for ($i = 0; $i < $total; $i++) {
    $num = $i + 1;
    echo "A idade do $num é $idadeAlunos[$i]".PHP_EOL;
}
