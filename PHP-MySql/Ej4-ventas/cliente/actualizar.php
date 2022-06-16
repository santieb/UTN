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
    $id = $_GET["cod_cliente"];
    $sql = "SELECT * FROM cliente WHERE cod_cliente=$id";

    $res = mysqli_query($con, $sql);
    $cliente = mysqli_fetch_array($res);

    if (!$cliente) echo "No se encontro el clientecliente"
  ?>

<body>
  <form method="post" action="./actualizarCtrl.php">
    <label>id<label>
    <input readonly="readonly" type="text" name="id" value="<?php echo $cliente['cod_cliente']?>">
    <label>nombre<label>
    <input type="text" name="nom" value="<?php echo $cliente['nomyape']?>">
    <label>dni<label>
    <input type="number" name="dni" value="<?php echo $cliente['dni']?>">
    <label>direccion<label>
    <input type="text" name="direccion" value="<?php echo $cliente['direccion']?>">
    <label>ciudad<label>
    <input type="text" name="ciudad" value="<?php echo $cliente['ciudad']?>">
    <input type="submit" name="enviar" value="enviar"/>
  </form>
</body>
</html>