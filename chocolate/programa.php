<?php 

$chocB = 0;
$chocE = 0;
$promoB = 0;
$promoE = 0;
$contagem = 0;

$chocB = $_POST["chocB"];
$chocE = $_POST["chocE"];

$contagem = 3;
while ($contagem <= $chocE){
	$promoB = $promoB + 1;
	$contagem = $contagem + 3;
}

$contagem = 2;
while ($contagem <= $chocB){
	$promoE = $promoE + 1;
	$contagem = $contagem  + 2;
}
$contagem = 5;
while ($contagem <= $chocB + $chocE){
	$promoB = $promoB + 1; 
	$contagem = $contagem + 5;
}

//echo $promoB . "<br/>";
echo $promoE . "<br/>";
echo $chocB . "<br/>";
echo $chocE . "<br/>";


echo $chocB + $promoB;
echo $chocE + $promoE;

?>
