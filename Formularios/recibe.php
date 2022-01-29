<?php
# Este será el archivo en cargado de recibir todos los datos del archivo index.php
// La variable $_POST se crea cuando el usuario presiona el boton submit del index.php

// print_r($_POST); Despliega los datos en pantalla que se almacenaron en los formularios

// Una forma de acceder a los valores almacenados de los formularios es esta:

if (!$_POST) { // Variable para comprobar si no existe el $_POST para redirigir a una pagina
    // Esto se traduce a: si el $_POST no existe, redirigir a la pagina
    header('Location: http://localhost:8888/curso_php/Formularios/');
    // header se encarga de dirigir a una pagina indicada
}

$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$year = $_POST['year'];
$terminos = $_POST['terminos'];

echo "hola ". $nombre . " eres " . $sexo;

// Post puede enviar archivos
// Post se puede utilizar para manejar informacion que el usuario no pueda manipular o acceder
// Post es para informacion delicada
