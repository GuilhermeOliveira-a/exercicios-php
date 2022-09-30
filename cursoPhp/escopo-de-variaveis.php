<?php
//Escopo global

$nome = "Guilherme oliveira ";
$a = 1;
$b = 3;
$c = 7;

function exibeNome(){
    global $nome;
    echo $nome;
}
exibeNome();
echo "<hr>";

/////////////////////////
function exibeCidade(){
    //Escopo local
    global $cidade;
    $cidade = "Rio de Janeiro";
}
exibeCidade();
echo "$cidade";
echo "<hr>";

///
function soma(){
    echo $GLOBALS ['a'] + $GLOBALS ['b'] + $GLOBALS ['c'];
}
soma();