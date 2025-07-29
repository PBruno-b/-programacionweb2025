<?php
$videojuego=[
    "Titulo"=> "The legend of Zelda",
    "Consola"=>"NES",
    "Año"=>1986,
    "Precio"=>50.00,
];

echo"El titulo es: ".$videojuego["Titulo"];
echo"<br>Salio en la consola: ".$videojuego["Consola"];
echo "<br>En el año: ".$videojuego["Año"];
echo "<br>Su precio es: $".$videojuego["Precio"];

$videojuego["Stock"]=10;
$videojuego["Estado"]='a la venta';

echo "<br>Hay un stock de: ".$videojuego["Stock"]. " Y su estado de venta es: ".$videojuego["Estado"];


?>
