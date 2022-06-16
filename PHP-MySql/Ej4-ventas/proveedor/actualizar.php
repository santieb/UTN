<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

  <?php
    include("../conexion.php");
    $id = $_GET["cod_proveedor"];
    $sql = "SELECT * FROM proveedor WHERE cod_proveedor=$id";

    $res = mysqli_query($con, $sql);
    $proveedor = mysqli_fetch_array($res);

    if (!$proveedor) echo "No se encontro el proveedor"
  ?>

<body>
  <form method="post" action="./actualizarCtrl.php">
    <label>id<label>
    <input readonly="readonly" type="text" name="id" value="<?php echo $proveedor['cod_proveedor']?>">
    <label>razon<label>
    <input type="text" name="razon" value="<?php echo $proveedor['razonsocial']?>">
    <label>direccion<label>
    <input type="text" name="direccion" value="<?php echo $proveedor['direccion']?>">
    <label>calidad<label>
    <input type="text" name="calidad" value="<?php echo $proveedor['calidad']?>">
    <input type="submit" name="enviar" value="enviar"/>
  </form>
</body>
</html>