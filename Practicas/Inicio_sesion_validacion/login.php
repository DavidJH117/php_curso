<?php session_start();

// Comprobar si el usuario no tiene una sesion iniciada
if (isset($_SESSION['usuario'])){
    header('Location: index.php');
}

$errores = '';

// Comprobar si se han enviado los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING); // se recive el usuario
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    // Conexion a la base
    try {
        $conexion = new PDO('mysql: host=localhost;dbname=curso_login', 'root', 'root');
    } catch (PDOException $e) {
        echo "Error:" . $e -> getMessage();
    }

    // Consulta a la base de datos
    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password'); // usuario y pass son los nombres que estan en las columnas de la tabla
    $statement -> execute(array(
        ':usuario' => $usuario,
        ':password' => $password
    ));

    // Se crea la sesion
    $resultado = $statement->fetch();
    if ($resultado !== false) {
        $_SESSION['usuario'] = $usuario;
        header('location: index.php'); // Se redirige al contenido de la pagina si los datos de la sesion son correctos
    } else {
        $errores .= '<li>Datos incorrectos</li>';
    }
}

require 'views/login.view.php';