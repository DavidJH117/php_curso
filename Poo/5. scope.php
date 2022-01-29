<?php
# Scope 

# Public
// Pueden ser accedidas desde cualquier parte, ya se dentro o fuera de la clase

# Protected 
// Pueden ser accedidas desde dentro de la misma clase y otras clases que heredaron. Pero no fuera de estas.

# Private
// Pueden ser accedidas desde dentro de la clase en la que fueron creados.
// Es decir no se pueden acceder a ellos desde otra clase que heredo y tampoco podemos acceder desde fuera de las clases.


class Usuario{
    public $nombre;
    protected $correo;

    function __construct($nombre, $correo){
        $this -> nombre = $nombre;
        $this -> correo = $correo;
    }

    public function mostrarInformacion(){
        return $this -> correo;
    }
}

class Miembro extends Usuario {
    public function mostrarCorreo(){
        return 'El correo es: ' . $this -> correo;
    }
}

$dante = new Miembro('Dante', 'dante@gmail.com');
echo $dante -> mostrarCorreo();