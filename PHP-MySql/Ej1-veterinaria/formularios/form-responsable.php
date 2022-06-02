<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsable</title>
</head>
<body style="margin:5%;">
    <h2>Responsable</h2>
    <form method="POST" action="../procesar/procesarResponsable.php">
        <label for="nomyape">Nombre y Apellido</label>
        <input type="text" id="nomyape" name="nomyape">
        <br>
        <br>
        <label for="direccion">Direccion</label>
        <input type="text" id="direccion" name="direccion">
        <br>
        <br>
        <label for="telefono">Telefono</label>
        <input type="number" id="telefono" name="telefono">
        <br>
        <br>
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
        <br>
        <br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>  


