<?php 
//Ejercicio1
$Tripulacion=['Alex Rider','Mia Kovalik','Raj Patel','Elena Vega','Jules Bergman'];
echo($Tripulacion[2]);
$Tripulacion[1]='Nadia Petrov';
$Tripulacion[]='Sam Carter';
$Tripulacion[]= 'Leo Wu';
$Tripulacion[]= 'Zara Khan';
?>

<?php 
// Ejercicio2
array_shift($Tripulacion);
array_unshift( $Tripulacion,'Dmitri Volkov', 'Yuki Tanaka');
echo(count($Tripulacion));
?>