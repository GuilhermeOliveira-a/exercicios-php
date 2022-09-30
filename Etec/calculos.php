<?php
$n1= 7;
$n2= 8;
$operacao= 1;

switch ($operacao){
    case 1:
       $resultado = $n1 + $n2;
       echo "o resultado da sua soma é: $resultado";
       break;
    case 2:
        $resultado= $n1 - $n2;
        echo "o resultado da sua subtracao é: $resultado";
        break;
    case 3:
        $resultado= $n1 * $n2;
        echo "O resultado da sua multiplicação é: $resultado";
        break;
    case 4:
        $resultado= $n1/$n2;
        echo "O resultado da sua divisão é: $resultado";
        break;
    default:
        echo "esta operação não esta disponivel";


}

?>