<?php

require_once 'loadfile.php';

use Msi\Regiao;
use Msi\Time;
use Msi\Titulos;
use Msi\LineUp;

$timeJDG = new Time(
    'JingDong Gaming',
    new Titulos(
        4,
        2,
        3),
    new LineUp(
        '369',
        'Kanavi',
        'Knight',
        'Ruler',
        'Missing'));
$novaRegiao = new Regiao('LPL', 'China', 'Liga Major', $timeJDG);

$timeLoud = new Time(
    'Loud',
    new Titulos(
        2,
        0,
        0),
    new LineUp(
        'Robo',
        'Croc',
        'Tinows',
        'Route',
        'Ceos'));

$regiaoBrasileira = new Regiao('CBL', 'Brasil', 'Liga Minor', $timeLoud);
