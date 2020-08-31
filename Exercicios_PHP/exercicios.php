<?php 

// Exercício 1

$numero1 = 1.11;

$resultado1 = intval($numero1);

echo "Exercicío 1"."<br>";
echo "Resposta: ".$resultado1."<br>"."<br>";

// Exercicío 2

$pessoa1 = ["nome" => "Silas", "idade" => 27];
$pessoa2 = ["nome" => "Camila", "idade" => 25];

$soma = $pessoa1['idade']+$pessoa2['idade'];

echo "Exercicío 2"."<br>";
echo "Resposta: ".$soma."<br>"."<br>";

// Exercício 3

$pessoa1 = ["nome" => "Silas", "idade" => 27];
$pessoa2 = ["nome" => "Camila", "idade" => 25];

$soma = $pessoa1['idade']+$pessoa2['idade'];

echo "Exercicío 3"."<br>";
echo "A soma das idades de ".$pessoa1['nome']." e ".$pessoa2['nome']." é ".$soma." anos."."<br>"."<br>";

//Exercício 4

$VA = 1;
$VB = 2;
$aux = $VA;

echo "Exercicío 4"."<br>";
echo "VA: ";
var_dump($VA)."<br>";
echo "VB: ";
var_dump($VB)."<br>";

$VA = $VB;
$VB = $aux;

echo "<br>";
echo "VA: ";
var_dump($VA)."<br>";
echo "VB: ";
var_dump($VB)."<br>";

//Exercício 5

$A = 1;
$B = 2;
$C = 3;

$resultado5 = ($A-$B)*$C;

echo "<br>"."<br>";
echo "Exercicío 5"."<br>";
echo "Resposta: ".$resultado5."<br>"."<br>";

//Exercício 6

$Fahre = 100;

$Celcius = round(($Fahre-32)*5/9);

echo "Exercicío 6"."<br>";
echo "Resposta: ".$Fahre." Fahrenheit é aproximadamente ".$Celcius." graus Celcius."."<br>"."<br>";

//Exercício 7

$dist = 520;
$rend = 12;
$preco = 1.5;

$resultado7 = $dist/$rend*$preco;

echo "Exercicío 7"."<br>";
echo "Resposta: Maria gastará ".$resultado7." reais de gasolina."."<br>"."<br>";

//Exercício 8

$input1 = 5430;

$horas = floor($input1/3600);

$min = floor(($input1%3600)/60);

$seg = (($input1%3600)/60)%60;

echo "Exercicío 8"."<br>";
echo "Resposta: ".$input1." segundos no formato hh:mm:ss é: ".$horas.":".$min.":".$seg."<br>"."<br>";

?>