<?php session_start();

session_destroy(); // Destruye la sesion
$_SESSION = array();

header('Location: login.php');

