<?php

class persona{
    public $nombre; //propiedades
    private $edad;
    protected $altura;


    public function asignarNombre($nuevoNombre){ //acciones o metodos...
        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre(){ 
        
        echo "<br/>"."Hola soy".$this->nombre;

    }

    public function mostrarEdad(){
        $this->edad=20;
        return "<br/>".$this->edad;
    }

}

class trabajador extends persona{
    public $puesto;

    public function presentarseTrabajador(){
        echo "hola soy ".$this->nombre." y soy un ".$this->puesto;
    }
}

$objAlumno = new persona(); //instancia o creacion de objeto
$objAlumno->asignarNombre("luxoi"); //llamando un metodo

$objTrabajador = new trabajador(); 
$objTrabajador->asignarNombre("Luxoi trabajador");
$objTrabajador->puesto="profesor";

$objTrabajador->presentarseTrabajador();

?>