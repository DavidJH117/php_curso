<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/69790e2c57.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galeria</title>
</head>

<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Subir foto</h1>
        </div>
    </header>

    <div class="contenedor">
        <!-- enctype="multipart/form-data" Sirve para poder subir archivos y almacenarlos --> 
        <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data">
            <label for="foto">Selecciona tu foto</label>
            <input type="file" id="foto" name="foto"> <!-- type="file" habilita el campo para que se puedan subir archivod -->

            <label for="titulo">Titulo de la foto</label>
            <input type="text" id="titulo" name="titulo">

            <label for="texto">Descripcion</label>
            <textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>

            <?php if(isset($error)): ?>
                <p class="error"><?php echo $error ?></p>
            <?php endif ?>

            <input type="submit" class="submit" value="Subir foto">
        </form>
    </div>

    <footer>
        <p class="copyright">Galeria creada por David Juarez - Practica Udemy</p>
    </footer>

</body>

</html>