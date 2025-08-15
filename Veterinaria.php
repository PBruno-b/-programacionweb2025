<?php

use BcMath\Number;
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $vacmin=0;
    $vacmax=3;
    $validacion_texto= "";
    $Nombre=string($_POST["nom"]);
    $Edad=int($_POST["age"]);
    $Vacunas=int($_POST["vac"]);
    $Raza=string($_POST["raz"]);
    $Fecha=int($_POST["date"]);
    if($validacion_texto!=$Nombre){
        if($Edad<=30){
           if($Vacunas<= 3){
                $Mascota=['Nombre'=>$Nombre, 'Edad'=>$Edad, 'Raza'=>$Raza, 'Vacunas'=>$Vacunas, 'Fecha'=>$Fecha];
           }else{
               echo "$Vacunas es un dato invalido";
           }
                
        }else{
            echo "$Edad es un dato invalido"
        }
    }else{
        echo "$Nombre es un dato invalido"
    }
}
?>
