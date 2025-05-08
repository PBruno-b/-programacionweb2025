<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){ 
$edadMin=11;
$edadMax=19;
$edadIng=floatval($_POST["edad"]);
if($edadIng >=$edadMin && $edadIng <= $edadMax){
    echo "Descuento válido";
}else{
    echo "No tiene la edad para acceder al descuento";
}



}
?>