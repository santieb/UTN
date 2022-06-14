<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsable</title>
</head>
<body style="margin:5%;">
    <?php
    include("../conexion.php");
    $cod = $_GET["cod"];
    $sql = "SELECT * FROM responsable WHERE id_responsable=$cod";
    $res = mysqli_query($con, $sql);
    $vec = mysqli_fetch_array($res);
    ?>
    <h2>Modificar Responsable</h2>
    <form method="POST" action="./procesarModiRes.php">
        <label for="idresponsable">Nombre y Apellido</label>
        <input type="text" id="idresponsable" name="idresponsable" value="<?php echo"$vec[0]" ?>" readonly>
        <br>
        <br>
        <label for="nomyape">Nombre y Apellido</label>
        <input type="text" id="nomyape" name="nomyape" value="<?php echo"$vec[1]" ?>">
        <br>
        <br>
        <label for="direccion">Direccion</label>
        <input type="text" id="direccion" name="direccion" value="<?php echo"$vec[2]" ?>">
        <br>
        <br>
        <label for="telefono">Telefono</label>
        <input type="number" id="telefono" name="telefono" value="<?php echo"$vec[3]" ?>">
        <br>
        <br>
        <label for="email">Email</label>
        <input type="text" id="email" name="email"value="<?php echo"$vec[4]" ?>">
        <br>
        <br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>  
