<?php 
$passagem = 0;
$total = 0;


$passagem= $_POST["passagem"];

if ($passagem > 4){
	$total = ($passagem - 4) * 2.80;
	$total = $total + (4 * 1.40);
}
else { 
	$total = $passagem *1.40;
}
echo "voce gastou com passagens R$" . number_format ( $total,2, ",","." ) ;		


?>
