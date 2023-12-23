<?php

$frutas = array("f"=>"fresa","p"=>"Pera","m"=> "Manzana");

print_r($frutas)."<br/>";



foreach($frutas as $indice=>&$valor){

    echo "El valor ".$valor." Tiene el indice ".$indice."<br/>";
    
}

?>