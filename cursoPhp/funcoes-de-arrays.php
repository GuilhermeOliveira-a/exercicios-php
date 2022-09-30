<?php
//is_array($array) = verificar se uma determinada variável é um array
$nomes = array("Irmão"=>"Henrique","Namorada" => "Vitoria","Amigo" => "Afonso","Mãe"=>"Luiza");
echo is_array($nomes); //is_array te devolvera um valor boolean, true or false
echo "<br>";


//in_array($valor, $array) = verifica se um determinado valor existe em alguma posição dentro do array
echo in_array("Vitoria", $nomes); //Também retornara um valor boolean
echo "<br>";


//array_keys($array)= retorna um novo array com as chaves do array passado como parametro
$keys = array_keys($nomes);
echo print_r($keys);


