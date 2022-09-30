<?php
// Escalares
// String = sequencia de caracteres
$nome = "Guilherme";
var_dump($nome);
if(is_string($nome)):
    echo "É uma string <br>";
else:
    echo "Não é uma string<br>";
endif;

//int
$idade = 10;
var_dump($idade);
if (is_int($idade)):
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;
echo "<hr>";



//boolean
$admin = true;
var_dump($admin);
if (is_bool($admin)):
    echo "É um boolean";
else:
    echo "Não é um boolean";
endif;
echo "<hr>";

// Compostos
$carros = array("Gol", "Uno", "Opala","Camaro");
var_dump($carros);
if (is_array($carros)):
    echo "É um array";
else:
    echo "Não é um array";
endif;
echo "<hr>";

//object
class Cliente {
    public $nome;
    public function atribuirNome($nome) {
         $this -> $nome = $nome;
    }
}

$cliente = new Cliente();
$cliente ->atribuirNome("Guilherme");
var_dump($cliente);