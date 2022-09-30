<?php
require 'funcoes.php'; //importando arquivos


$contasCorrentes = [
    'Cliente-01' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],

    'Cliente-02' => [
        'titular' => 'Fernanda',
        'saldo' => 500
    ],
    
    'Cliente-03' => [
        'titular' => 'Joaquim',
        'saldo' => 20000
    ]
    
];


$sacar =0;
$contasCorrentes['Cliente-01'] = sacar($contasCorrentes['Cliente-01'],valorASacar:500);
$contasCorrentes['Cliente-02'] = sacar($contasCorrentes['Cliente-02'],valorASacar:500);
$contasCorrentes['Cliente-03'] = sacar($contasCorrentes['Cliente-03'],valorASacar:500);

titularComLetrasMaiusculas( $contasCorrentes['Cliente-03']);

echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta){
    exibeconta($conta);
}
echo "</ul>";
?>
!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <dt>$conta{'titular'}</dt>
    </dl>
</body>
</html>
