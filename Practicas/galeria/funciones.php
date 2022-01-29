<?php

// Funcion para conectarnos a la base de datos
function conexion($tabla, $usuario, $pass){
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=$tabla", $usuario, $pass); //  Los datos de la conexion estan en subir.php
        return $conexion;
    } catch (PDOException $e){
        return false;
    }
}