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

/*$catalogo=["Titulo" => ['A'=>"The Legend of Zelda", 'B'=>"Super Mario Bros. 3", 'C'=>"Chrono Trigger"],
'Consola'=>['NES','NES','C'=>'SNES'], 
'Año'=>[1986,1988,'C'=>1995],
'Precio'=>[50.00,45.00,'C'=>80.00], 
'Stock'=>[10,15,'C'=>5],
'Estado'=>['a la venta', 'a la venta', 'a la venta']
];*/

$inventario=['The legend of Zelda'=>['Titulo'=>'The legend of Zelda', 'Consola'=>'NES','Año'=>'1986', 'Precio' => '50.00', 'Stock'=>10, 'Estado'=>'a la venta'],
'Super Mario' => ['Titulo' => 'Super Mario Bros', 'Consola' => 'NES', 'Año' => '1988', 'Precio' => '45.00', 'Stock' => 15, 'Estado' => 'a la venta'],
'Chrono' => ['Titulo' => 'Chrono Trigger', 'Consola' => 'SNES', 'Año' => '1995', 'Precio' => '80.00', 'Stock' => 5, 'Estado' => 'a la venta'],];

/*echo"<br>El titulo es: ".$inventario['The legend of Zelda']['Titulo'];
echo"<br>Salio en la consola: ".$inventario['Super Mario']['Consola'];
echo"<br>Salio en la consola: ".$inventario['Chrono']['Consola'];*/

foreach($inventario as $producto){
    foreach($producto as $datos){
        if($datos=='Titulo'){
            echo '<br>El titulo del juego es: '.$datos;
        }
    }
}
?>
