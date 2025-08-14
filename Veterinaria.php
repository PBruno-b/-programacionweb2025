<?php

use BcMath\Number;
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $vacmin=0;
    $vacmax=3;
    $validacion_texto= "";
    $Nombre=string($_POST["nom"]);
    $Edad=int($_POST["age"]);
    $Vacunas=int($_POST["vac"]);
    if($validacion_texto!=$Nombre){
        if($Edad<=30){
         //  if($Vacunas<= 3){}
                
        }
    }
}
?>