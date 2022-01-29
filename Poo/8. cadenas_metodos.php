<?php

# Permite desplegar el contenido de funciones en una sola linea de codigo

class Usuario {
    public $nombre;
    public $correo;

    function __construct($nombre, $correo)
    {
        $this -> nombre = $nombre;
        $this -> correo = $correo; 
    }

    public function mostrarNombre(){
        echo 'Su nombre es: ' . $this -> nombre . '<br>';
        return $this; // Esta es una linea de codigo importante para poder encadenar los metodos
    } 
    
    public function mostrarCorreo(){
        echo 'Su correo es: ' . $this -> correo . '<br>';
        return $this;
    }
}

$amicia = new Usuario('Amicia', 'amicia@gmail.com');
// Asi se hace una cadena de metodos
$amicia -> mostrarNombre() -> mostrarCorreo();