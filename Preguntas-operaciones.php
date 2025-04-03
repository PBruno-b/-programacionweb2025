<?php 
$totalCompra =150;
$umbralDescuento=100;
echo "Monto total de compra: $totalCompra<br>";
echo "/mbral de activacion del descuento: $umbralDescuento <br>";
if ($totalCompra > $umbralDescuento){
    echo "¡Bien ahí! Tu compra califica para el descuento.";
}else{
    echo "Tu compra no alcanza el umbral de activacion del descuento. Seguí comprando para obtener descuentos adicionales.";
}
//El objetivo del php es calcular si la compra del cliente puede recibir el descuento
//las variables son el coste de todo lo compra el  cliente y el valor que debe superar para recibir el descuento
//Si el coste de la compra es superior a 100 el cliente recibe el descuento
?>