<?php

$contasCorrentes = [ 
    10240000 => [
        'titular' => 'Guilherme',
        'saldo' => 600
    ],
    
    12492999 => [
        'titular' => 'Maria',
        'saldo' => 240 
    ],
    23244222 =>[
        'titular' => 'Vitoria',
        'saldo' => 100
    ]
];

foreach ($contasCorrentes as $cpf => $conta){
    echo "cpf cadastrados são: $cpf".PHP_EOL;

}