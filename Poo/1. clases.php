<?php
# Una clase es como una plantilla donde dentro tienes variables y funciones

# Estructura de una clase
// En las clases las variablers que se ven se llaman propiedades
class Persona {
    public $nombre; // Propiedad nombre
    public $edad; // Propiedad edad
    public $pais; // Propiedad pais

    # Funcion que pertenece a la clase personas (son llamadas Metodos)
    // Todas las personas pueden acceder al metodo
    public function mostrarInformacion(){
        echo 'Hola mundo';
    }
}

# En este caso el objeto es Santiago
# Se indica que la variable santiago pertenece a la clase persona
$santiago = new Persona;

# Para agregar datos a la clase con la variable
$santiago -> nombre = 'Santiago';
$santiago -> edad = 23;
$santiago -> pais = 'Mexico';

# Acceder al metodo de Persona
$santiago -> mostrarInformacion();
echo '<br>';

# Una forma de acceder a la informacion de la clase es la siguiente
echo $santiago->nombre . ' tiene ' . $santiago->edad . ' años';

# Objeto Amicia asigando propiedades a la clase Personas
$amicia = new Persona;
$amicia -> nombre = 'Amicia';
$amicia -> edad = 26;
$amicia -> pais = 'Francia';