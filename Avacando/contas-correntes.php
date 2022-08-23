<?php

$conta01 = [
    'titular' => 'Guilherme',
    'saldo' => 600
];

$conta02 = [
    'titular' => 'Maria',
    'saldo' => 240 
];

$conta03 = [
    'titular' => 'Fabiana',
    'saldo' => 100
];

$contasCorrentes = [ $conta01, $conta02, $conta03 ];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
    
}