<?php
$funcionario= "guilherme";
$salario= 600;
$reajuste = 0;
$novoSalario= 0;

if($salario>=1500){
    $faixaReajuste = "10%";
    $reajuste = $salario*10/100;
    $novoSalario = $salario + $reajuste;
}
else if($salario<1500){
    $faixaReajuste = "20%";
    $reajuste = $salario*20/100;
    $novoSalario = $salario + $reajuste;
}

echo "nome: $funcionario
     \nreajuste: $reajuste
      \nsalario:$salario
      \nNovo salario:$novoSalario
       \nFaixa de reajuste: $faixaReajuste"





    
   



?>