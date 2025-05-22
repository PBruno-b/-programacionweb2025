<?php
$semana=[];
$semana[]='Lunes';
//si los parentesis estan vacios agregara el valor al ultimo lugar disponible en este caso 0
//si los parentesis tienen un numero ejemplo [0] significa que remplazara el dato que se alojaba en el lugar 0
$semana=['Lunes'];
$semana[3]='Martes';
var_dump($semana);
//te permite acceder o leer a ese lugar
print(count($semana));
?>
<?php 
print("<br>");
$planeta=[];
$planeta[]='Marte';
var_dump($planeta);
$planeta[]='Tierra';
var_dump($planeta);
$planeta[]= 'Venus';
var_dump($planeta);

foreach($planeta as $planetas){
    echo "<br>".$planetas ;
}

?>