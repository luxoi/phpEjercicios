<?php

class persona{
    public $nombre; //propiedades

    public function asignarNombre($nuevoNombre){ //acciones o metodos...
        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre(){ 
        
        echo "<br/>"."Hola soy".$this->nombre;

    }

}

$objAlumno = new persona(); //instancia o creacion de objeto
$objAlumno->asignarNombre("luxoi"); //llamando un metodo

echo $objAlumno->nombre; //imprimir una proiedad

$objAlumno2 = new persona(); //instancia o creacion de objeto
$objAlumno2->asignarNombre("Oscar"); //llamando un metodo
$objAlumno2->imprimirNombre();

echo $objAlumno2->nombre; //imprimir una proiedad
?>