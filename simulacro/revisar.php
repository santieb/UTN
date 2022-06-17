<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $id = $_GET["id"];
    ?>
    <form method="post" action="./revisar.php">
        <h1>REVISION <?php echo $id; ?></h1>
    
        <label>id</label>
        <input type="number" name="id" value="<?php echo $id; ?>"/>
        <label>Fecha egreso</label>
        <input type="date" name="fecha"/>
        <input type="submit" name="enviar"/>
    </form>

    <?php
        include("conexion.php");
        if (isset($_POST['enviar'])) {
            $id = $_POST["id"];
            $fecha = $_POST['fecha'];
            $sql = "UPDATE revision SET fegreso = '$fecha' WHERE cod_revision = '$id'";
            $res = mysqli_query($con, $sql);
            if ($res) {
                echo "Se actualizo correctamente";
            } else {
                echo "No se registro";
            }
        }
    ?>

</body>
</html>