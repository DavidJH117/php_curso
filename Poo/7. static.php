<?php

class Persona
{
    public static $dia = '30 de enero';

    public static function saludo($nombre = null)
    { // Buena practica poner static a la funcion
        if ($nombre) {
            return 'Hola, buen dia ' . $nombre;
        } else {
            return 'Hello there';
        }
    }
}

// $dante = new Persona;

// Ya no es necesario iniciar una estancia se puede acceder directaente a la propiedad de la sig. forma:
echo Persona::saludo('Amicia');
