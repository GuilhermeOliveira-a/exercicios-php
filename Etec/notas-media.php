<?php
$nome = "maria";
$n1 = 6;
$n2 = 7;
$n3 = 4;
$somaNota = $n1 + $n2 + $n3;
$media = $somaNota/3;

echo " \nNome do aluno: $nome,\nSoma das notas: $somaNota,\nMedia geral: $media";

if($media>8)
   echo"\naluno MB";
else if($media>=6)
    echo "\naluno b";
else if($media>4)
    echo "\naluno R";
else if($media<=4)
    echo "\naluno I";



?>