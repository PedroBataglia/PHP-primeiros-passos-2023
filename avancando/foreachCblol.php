<?php

$loud = [
    'top' => 'robo',
    'jg' => 'croc',
    'mid' => 'tinows',
    'adc' => 'route',
    'sup' => 'ceos',
];

$red = [
    'top' => 'boal',
    'jg' => 'aegis',
    'mid' => 'avenger',
    'adc' => 'titan',
    'sup' => 'kuri',
];

$furia = [
    'top' => 'fnb',
    'jg' => 'goot',
    'mid' => 'envy',
    'adc' => 'trigo',
    'sup' => 'redbeart',
];

$gi = [
    'top' => 'hirit',
    'jg' => 'ranger',
    'mid' => 'lava',
    'adc' => 'netuno',
    'sup' => 'zay',
];

$cblol = [$loud, $red, $furia, $gi];

foreach($cblol as $times) {
    echo "O melhor adc do campeonato é $times[adc]".PHP_EOL;
}
