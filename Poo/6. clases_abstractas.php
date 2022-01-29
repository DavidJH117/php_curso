<?php
# Clases abstractas
// Las clases abstractas son una forma de proteger toda nuestra clase
// Solo se puede acceder a ella heredandola

abstract class Persona {
    public function saludo(){
        return 'Hola';
    }
}

class Estudiante extends Persona {

}

$dante = new Estudiante;
echo $dante -> saludo();