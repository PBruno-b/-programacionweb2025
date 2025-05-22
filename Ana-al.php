<?php 
$dias =['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];
foreach($dias as $dia){
    if($dia=='Sabado' || $dia=='Domingo'){
        echo "". $dia . " Dia de descanso"; 
    }else
        echo " ". $dia . " Dia de trabajo ";
}
?>