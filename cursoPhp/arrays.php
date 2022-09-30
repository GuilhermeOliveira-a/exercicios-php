<?php
//Arrays
$carros = array("BMW","Veloster","Ford");//array com índice automático começando do zero
$carros[] = "Amarok"; //Adicionando valores ao array
$carros[5] = "Camaro";//Adicionando valores com índices ao array
print_r($carros);
echo "<br>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos [5] = "Suzuki";
echo "<br>";

$clientes = ["Guilherme", "Felipe","Bia"];
print_r($clientes);
echo"<hr>";

//count
//verificando quantos elementos tem um array
echo count($motos);
echo "<br>";
echo "<hr>";

//Foreach
foreach ($carros as $nomes){
    echo $nomes."<br>";
}
echo "<hr>";

foreach ($clientes as $pessoas){
    echo $pessoas."<br>";
}
//Arrays associativos
$pessoa = array("Nome"=> "Guilherme", "idade" => 23,"altura"=>1.65);
$pessoa ["cidade"] = "Itabuna";

foreach ($pessoa as $indice => $valor){
    echo $indice.";".$valor."<br>";
}
echo "<hr>";

//Arrays  multidimencionais
$catalogo = array(
    "Filmes" => array("1978" => "Halloween", "1993" => "The Crush", "2004" => "Saw"),
    "Series" => array("2009" =>"Modern Family", "2017" => "The Good Doctor","2022" => "Control Z"),
    "Desenhos" => array("2007" => "Futurama", "1989"=>"Simpsons", "2018" => "Final Space")
);
echo "<br>";
foreach ($catalogo["Filmes"]as $indice => $valor){
    echo $indice.":".$valor."<br>";
}
echo "<br>";
foreach ($catalogo["Series"]as $indice => $valor){
    echo $indice.":".$valor."<br>";
}
echo "<br>";
foreach ($catalogo["Desenhos"]as $indice => $valor){
    echo $indice.":".$valor."<br>";
}
