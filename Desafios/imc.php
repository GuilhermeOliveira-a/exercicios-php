<?php
$peso = 38;
$altura = 1.40;
$imc =  $peso / $altura**2;

echo ("Seu imc é  de $imc. Você está com o imc ");

if($imc < 18){
  echo "baixo";
}else if($imc < 25){
   echo "Dentro";
}else{
   echo "acima";
};
 echo " do recomendado";       
 