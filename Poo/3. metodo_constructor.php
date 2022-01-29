<?php
# El metodo constructor se utiliza por lo general para agregar datos a las variables de una clase

class Persona{
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre, $edad, $pais){ // Estructura basica de un metodo constructor
        $this -> nombre = $nombre; // Asignacion de valores 
        $this -> edad = $edad;
        $this -> pais = $pais;
        // Estos valores de asigan a las propiedades de arriba para desplegarlos en el metodo mostrarInformacion()
    }

    public function mostrarInformacion(){
        echo $this -> nombre . ' tiene ' . $this -> edad . ' años y es de ' . $this -> pais;
    }
}

$amicia = new Persona('Amicia', 17, 'Francia');
// Se tienen que poner en orden los datos con el metodo contructor en los parentesis (alineados)
$amicia -> mostrarInformacion();

echo '<br>';

$dominic = new Persona('Dominic', 38, 'EUA');
$dominic -> mostrarInformacion();