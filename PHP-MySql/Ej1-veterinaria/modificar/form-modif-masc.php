<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascota</title>
</head>
<body style="margin:5%;">
    <?php
    include("../conexion.php");
    $cod = $_GET["cod"];
    $sql = "SELECT * FROM mascota WHERE id_mascota=$cod";
    $res = mysqli_query($con, $sql);
    $vec = mysqli_fetch_array($res);
    ?>
    <h2>Modificar Mascota</h2>
    <form method="POST" action="./procesarModiMasc.php">
        <label for="idmascota">Id de la Mascota</label>
        <input type="text" id="idmascota" name="idmascota" readonly value="<?php echo"$vec[0]" ?>">
        <br>
        <br>
        <label for="nommascota">Nombre</label>
        <input type="text" id="nommascota" name="nommascota" value="<?php echo"$vec[1]" ?>">
        <br>
        <br>
        <label for="fnmascota">Fecha de nacimiento</label>
        <input type="date" id="fnmascota" name="fnmascota" value="<?php echo"$vec[2]" ?>">
        <br>
        <br>
        <label for="especie">Especie</label>
        <input type="text" id="especie" name="especie" value="<?php echo"$vec[3]" ?>">
        <br>
        <br>
        <label for="raza">Raza</label>
        <input type="text" id="raza" name="raza" value="<?php echo"$vec[4]" ?>"> 
        <br>
        <br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>