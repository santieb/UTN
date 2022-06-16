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
    $id = $_GET["cod_producto"];
    $sql = "SELECT * FROM producto WHERE cod_producto=$id";

    $res = mysqli_query($con, $sql);
    $cliente = mysqli_fetch_array($res);

    if (!$cliente) echo "No se encontro el producto"
  ?>

<body>
<form method="post" action="./actualizarCtrl.php">
    <label>id<label>
    <input type="text" name="id" value="<?php echo $cliente['cod_producto'] ?>">
    <label>nombre<label>
    <input type="text" name="nom" value="<?php echo $cliente['nombre'] ?>">
    <label>punitaro<label>
    <input type="number" name="punitario" value="<?php echo $cliente['punitario'] ?>">
    <label>categoria<label>
    <select name="categoria" value="<?php echo $cliente['categoria'] ?>">
      <option value="computacion">computacion</option>
      <option value="deportes">deportes</option>
      <option value="muebles">muebles</option>
      <option value="libreria">libreria</option>      
    </select>
    <label>stock<label>
    <input type="number" name="stock" value="<?php echo $cliente['stock'] ?>">
    <select name="proveedor">
      <?php
        include("../conexion.php");

        $sql = "SELECT * FROM  proveedor";
        $res = mysqli_query($con, $sql);
        echo "<option>".$cliente['cod_proveedor']."</option>";
        foreach ($res as $row) {
            echo "<option>".$row['cod_proveedor']."</option>";
          }
        ?>
      ?>
    <select>
    <input type="submit" name="enviar" value="enviar"/>
  </form>
</body>
</html>