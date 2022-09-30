<?php
function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta ['saldo']) //comparando o valor de saque com o valor na conta
        exibeMensagem("Você não pode sacar");
   else{
    $conta['saldo'] -= $valorASacar;
}
return $conta;
}

function exibeMensagem ($mensagem)
{
    echo $mensagem . '<br>';
}

//função com passagem por referencia
function titularComLetrasMaiusculas (array &$conta){
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeconta (array $conta)
    {
        ['titular' =>$titular]
        echo "<li> Titular: $conta[Titular]. Saldo:$conta[Saldo] </li>";
    }