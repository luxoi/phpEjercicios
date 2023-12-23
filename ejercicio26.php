<?php

class persona{
    public $nombre; //propiedades
    private $edad;
    protected $altura;

    function __construct( $nuevoNombre){
        $this->nombre=$nuevoNombre;
    }

    public function asignarNombre($nuevoNombre){ //acciones o metodos...
        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre(){ 
        
        echo "<br/>"."Hola soy ".$this->nombre;

    }

    public function mostrarEdad(){
        $this->edad=20;
        return "<br/>".$this->edad;
    }
}

$objAlumno = new persona("oaoa"); //instancia o creacion de objeto

$objAlumno->imprimirNombre();


?>