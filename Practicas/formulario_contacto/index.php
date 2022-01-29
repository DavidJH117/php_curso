<?php

$errores = '';
$enviado = '';

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    if (!empty($nombre)){ // Si tiene contenido ejecuta el codigo
        $nombre = trim($nombre); // Quita espacios antes y despues de los caracteres
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresa un nombre <br>';
    }

    if (!empty($correo)){
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Por favor ingresa un correo valido <br>';
        }
    } else {
        $errores .= 'Por favor ingresa un correo <br>';
    }

    if (!empty($mensaje)){
        $mensaje = htmlspecialchars($mensaje); // Impide inyectar codigo html
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje); // Quita slashes
    } else {
        $errores .= 'Por favor ingresa un mensaje';
    }

    if (!$errores) { // Si no hay errores
        $enviar_a = 'tunombre@empresa.com';
        $asunto = 'Correo enviado desde miPagina.com';
        $mensaje_preparado = "De: $nombre \n";
        $mensaje_preparado .= "Correo: $correo \n";
        $mensaje_preparado .= "Mensaje: " . $mensaje;

        // mail($enviar_a, $asunto, $mensaje_preparado);
        // mail() Envia un correo, primeor va el destinatario, despues asunto, y al final el mensaje
        // Solo se envia el correo si el sitio esta alojado en un hosting
        $enviado = true; 
    }
}

require 'index.view.php';


