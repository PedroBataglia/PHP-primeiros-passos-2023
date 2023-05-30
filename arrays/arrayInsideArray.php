<?php

$var = array(array("samp1" => "1", "2", "3"));

print_r($var).PHP_EOL;

echo $var['0']['samp1'].PHP_EOL;

echo $var['0']['0'].PHP_EOL;

echo $var[0]['1'];
