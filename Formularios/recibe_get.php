<?php
# En Get se pueden editar los datos atravez de la url, lo cual no es confiable

// print_r($_GET);

if (!$_GET) {
    header('Location: http://localhost:8888/curso_php/Formularios/');
}

$nombre = $_GET['nombre'];
$sexo = $_GET['sexo'];
$year = $_GET['year'];
$terminos = $_GET['terminos'];

if ($nombre) { // Forma de validar si el usuario agrego un nombre en el formulario
    echo $nombre . '<br>';
} else {
    echo 'El usuario no registro un nombre <br>';
}

echo $sexo . '<br>';
echo $year . '<br>';
echo $terminos . '<br>';
