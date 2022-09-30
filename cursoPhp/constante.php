<?php
//constantes
//("NOME DA CONSTANTE", "VALOR DA CONSTANTE")
define ("NOME", "Guilherme Oliveira");
define("IDADE", 22);

define("ANIMAIS",['cachorro','gatos','peixes']); //Array com constantes


function exibeNome(){
    echo 'Meu nome é '.NOME.' Minha idade é'.IDADE;
}

exibeNome();