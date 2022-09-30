<?php
$idadeList = [21,23,19,25,30,41,18];

$idadeVinicius = $idadeList[0];
$idadeCarlos = $idadeList[1];
$idadeYris = $idadeList[2];

$idadeList[] = 20;

foreach ($idadeList as $idade){
    echo $idade .PHP_EOL;
}

/* Outra forma de atribuir os valores dos arrays dentro das variáveis
 *
 *  list ($idadeVinicios, $idadeCarlos, $idadeYris) = $idadeList;
 *
 * Vai ser atribuindo conforme os indices do array
 */
