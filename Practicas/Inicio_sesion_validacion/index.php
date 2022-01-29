<?php

session_start(); // Importante añadir en todas la paginas con inicio de sesion requerido al inicio

if (isset($_SESSION['usuario'])) {  // Comprobar si se ha iniciado sesion
	header('Location: contenido.php'); // Si si lo envia al contenido
} else {
	header('Location: registro.php'); // Si no lo envia a registrarse
}