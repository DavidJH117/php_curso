<?php

class Persona{
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInformacion(){
        // echo $this -> nombre; Forma correcta de acceder a los datos de una clase dentro de la misma
        echo $this -> nombre . ' tiene ' . $this -> edad . ' años y vive en ' . $this -> pais;
        // La palabra this hace referencia a los datos de la clase en la que se encuentra
    }
}

$amicia = new Persona; // Indicativo de pertenencia a clase Persona
$amicia -> nombre = 'Amicia'; // Asignación de valores
$amicia -> edad = 17;
$amicia -> pais = 'Francia';
$amicia -> mostrarInformacion(); // Llamada al metodo de la clase

echo '<br>';

$hugo = new Persona;
$hugo -> nombre = 'Hugo';
$hugo -> edad = 7;
$hugo -> pais = 'Alemania';
$hugo -> mostrarInformacion();