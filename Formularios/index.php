<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios PHP</title>
</head>

<body>
    <!--El metodo post crea un arreglo en el cual se almacenan los datos que el usuario ingresa-->
    <form action="recibe.php" method="post">
        <!--En action va el archivo php al cual se van a enviar los datos-->
        <input type="text" placeholder="Nombre" name="nombre">
        <!--La caja de texto enviará un dato como nombre (name="nombre")-->
        <br>
        <!--En for el valor hombre va ligado al id "hombre" del radio button-->
        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hombre" id="hombre">
        <!--En value aparece "hombre" ya que es el valor que se enviará-->

        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" value="mujer" id="mujer">
        <!--En name="sexo" debe ser igual para los dos radiobuttons para indicar que pertenecen a la misma seccion-->
        <br>

        <select name="year" id="year">
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
        </select>
        <br>

        <label for="terminos">aceptas los terminos?</label>
        <input type="checkbox" name="terminos" id="terminos" value="ok">
        <br>

        <!--Atravez de los name de cada input php va a acceder a ellos-->

        <input type="submit" value="Enviar"> <!-- Es necesario que sea de tipo submit para que envie los datos-->
    </form>
</body>

</html>