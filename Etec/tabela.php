<?php
$nome= "guilherme";
$modalidade= 4;

switch ($modalidade){
    case 1:
        $tipo = "natação";
        $preco = 95.00;
        echo " $nome, $tipo, $preco ";
        break;
    case 2:
        $tipo = "música";
        $preco = 120.00;
        echo "$nome, $tipo, $preco";
        break;
    case 3:
        $tipo = "dança";
        $preco = 100.00;
        echo "$nome, $tipo,$preco";
        break;
    case 4:
        $tipo= "musculação";
        $preco = 67.00;
        echo  "$nome, $tipo,$preco";
        break;
    default:
        echo "Modalidade não disponivel";

}