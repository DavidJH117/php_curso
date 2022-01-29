<?php session_start();

// Comprobar si la sesion esta en curso
if (isset($_SESSION['usuario'])) {
    require 'views/contenido.view.php';
} else{
    header('Location: login.php');
}

