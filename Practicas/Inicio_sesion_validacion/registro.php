<?php session_start(); // Requiere que la sesion esté iniciada

if (isset($_SESSION['usuario'])) { // Si esta la sesion iniciada le impide al 
    header('Location: index.php'); // usuario resgistrarse nuevamente, lo manda al index
}

// Resivir los datos del registro
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Si los datos fueron enviados por post
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING); // Son pasados por el name del html
    $password = $_POST['password']; // y se guardan en una variable
    $password2 = $_POST['password2'];

    // echo "$usuario . $password . $password2 "; // Comprueba si los datos se estan enviando

    $errores = ''; // Se agrega una variable vacia ya que aqui se guardaran lo errores que el usuario cometa

    if (empty($usuario) or empty($password) or empty($password2)) { // Se comprueba si el usuario o las contraeñas estan vacias

        $errores .= '<li>Pro favor rellena todos los datos correctamente</li>';

    } else { // Comprobar si el usuario ya existe 

        try{ // conexion a la base de datos
            $conexion = new PDO('mysql: host=localhost;dbname=curso_login', 'root', 'root');
        } catch (PDOException $e) {
            echo "Error " . $e->getMessage();
        }

        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
        $statement -> execute(array(':usuario' => $usuario));
        $resultado = $statement->fetch();

        if ($resultado != false) {
            $errores .= '<li>El nombre de usuario ya existe</li>';
        }
        
        // Encriptar las contraseñas ( aunque es mejor tomar un curso de seguridad informatica )
        $password = hash('sha512', $password); // Se ecripta con el protocolo sha512, se puede encriptar con otros
        $password2 = hash('sha512', $password2); 
        // echo "$usuario . $password . $password2 ";
        
        if ($password != $password2) { // Si el usuario ingresa contraseñas diferentes
            $errores .= '<li>Las contraseñas ingresadas son diferentes</li>';
        }
    }

    // Añadir el usuario a la base de datos
    if ($errores == '') { // Si la contraseña no tiene errores
        $statement = $conexion -> prepare('INSERT INTO usuarios (id, usuario, pass) VALUES (null, :usuario, :pass)');
        $statement->execute(array(
            ':usuario' => $usuario,
            ':pass' => $password
        ));

        header('Location: login.php'); // Reenvia al inicio de sesion
    }
}

require 'views/registro.view.php';
