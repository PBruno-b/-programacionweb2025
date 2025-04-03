<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){ 
$valorDolar=40;
$cantidadDePesos=floatval($_POST["pesos"]);
$cantidadDeDolares= $cantidadDePesos/$valorDolar;
echo "Resultado de la Conversion";
echo "$cantidadDePesos pesos uruguayos equivalen a ".$cantidadDeDolares. " dólares"; 
}else{
    echo "Error en la solicitud";
}

?>