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

$catalogo=["Titulo" => ['A'=>"The Legend of Zelda", 'B'=>"Super Mario Bros. 3", 'C'=>"Chrono Trigger"],
'Consola'=>['NES','NES','C'=>'SNES'], 
'Año'=>[1986,1988,'C'=>1995],
'Precio'=>[50.00,45.00,'C'=>80.00], 
'Stock'=>[10,15,'C'=>5],
'Estado'=>['a la venta', 'a la venta', 'a la venta']
];

echo"<br>El titulo es: ".$catalogo["Titulo"]['C'];
echo"<br>Salio en la consola: ".$catalogo['Consola']['C'];
echo "<br>En el año: ".$catalogo['Año']['C'];
echo "<br>Su precio es: $".$catalogo['Precio']['C'];

?>
