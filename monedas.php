<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){ 
$valorDolar=40;
$valorEuro=43;
$valorReal=8;
$cantidadDePesos=floatval($_POST["pesos"]);
$SeleccionMoneda=floatval($_POST["moneda"]);
switch($SeleccionMoneda){
    case 1:
        $cantidadDeDolares= $cantidadDePesos/$valorDolar;
echo "Resultado de la Conversion: ";
echo "$cantidadDePesos pesos uruguayos equivalen a ".$cantidadDeDolares. " Dólares"; 
break;
case 2:
    $cantidadDeEuros= $cantidadDePesos/$valorEuro;
echo "Resultado de la Conversion: ";
echo "$cantidadDePesos pesos uruguayos equivalen a ".$cantidadDeEuros. " Euros"; 
break;
case 3:
    $cantidadDeReal= $cantidadDePesos/$valorReal;
echo "Resultado de la Conversion: ";
echo "$cantidadDePesos pesos uruguayos equivalen a ".$cantidadDeReal. " Reales"; 
break;
case 4:
    echo "Bobito";
break;
}




}else{
    echo "Error en la solicitud";
}

?>