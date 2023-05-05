<?php

require_once 'Cachorro.php';
require_once 'Humano.php';

use Animais\Cachorro;
use Animais\Humano;

$princesa = new Cachorro('Princesa',
        new Humano('Carlos', '23', 'Engenheiro'), 'PitBull', 7, 110);

//var_dump($princesa);

echo $princesa;
