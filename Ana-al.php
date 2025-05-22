<?php 
$contLab=0;
$contDes=0;
$dias =['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];
foreach($dias as $dia){
    if($dia=='Sabado' || $dia=='Domingo'){
        echo "". $dia . " Dia de descanso <br>";
        $contDes++; 
    }else {	       
         echo " ". $dia . " Dia de trabajo <br>";
        $contLab++;
    }
}   
echo " Dias de descanso $contDes <br>" . "Dias laborales $contLab";
?>