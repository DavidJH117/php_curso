<?php

# Herencia
// Evita ecribir codigo una y otra vez en nuevas clases que requieran las mismas propiedades de otra

class Persona
{
    public $nombre;
    public $edad;
    public $pais;

    public function __construct($nombre, $edad, $pais)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInformacion()
    {
        return $this->nombre . ' tiene ' . $this->edad . ' años y es de ' . $this->pais;
    }
}

// extends es la palabra clave que inidca que la nueva clase estudiante extendera propiedades y metodos de la clase Persona
class Estudiante extends Persona
{
    // Es necesario sobreescribir el metodo constructor para la nueva clase
    public function __construct($nombre, $edad, $pais, $carrera)
    {
        // Es una forma de resumir la asignacion de los valores de la vieja funcion del metodo constructor de la clase Persona
        parent::__construct($nombre, $edad, $pais);
        // Se le asigna el nuevo valor de la clase
        $this->carrera = $carrera;
    }
}

class Tranajador extends Persona
{
    public function __construct($nombre, $edad, $pais, $trabajo)
    {
        parent::__construct($nombre, $edad, $pais, $carrera);
        $this->trabajo = $trabajo;
    }
}

$dante = new Estudiante('Dante', 23, 'Alemania', 'Desarrollo');
echo $dante->carrera;

echo '<br>';

$amicia = new Tranajador('Amicia', 27, 'Francia', 'Profesora');
echo $amicia->trabajo;
