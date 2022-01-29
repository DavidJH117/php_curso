<?php

require 'funciones.php';

$conexion = conexion('galeria_practica','root','root');

if (!$conexion) {
    header('Location: index.php');
    die();
}

// Si el archivo se subio por post y no hay archivos vacios
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) { // $_FILES es similar a $_GET, $_POST y $_SESSION
    $check = @getimagesize($_FILES['foto']['tmp_name']); // Regresa un arreglo con los datos de la foto, tpm_name es una de las propiedades que regresa el arreglo que es dodne se guarda la imagen temporalmente

    if ($check !== false) { // Si lo anterior regersa true
        $carpeta_destino = 'fotos/'; // ruta donde se guardan las fotos
        $archivo_subido = $carpeta_destino . $_FILES['foto']['name']; // Despliega la ruta y el nombre del archivo 
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido); // Guarda el archivo a la carpeta

        $statement = $conexion->prepare('INSERT INTO fotos (titulo, imagen, texto) VALUES (:titulo, :imagen, :texto)');

        $statement->execute(array(
            ':titulo' => $_POST['titulo'],
            ':imagen' => $_FILES['foto']['name'],
            ':texto' => $_POST['texto']
        ));

        header('Location: index.php');
    } else {
        $error = "El archivo no es una imagen o el archivo es muy pesado";
    }
}

require 'views/subir.view.php';