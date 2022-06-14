<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Formulario</title>
</head>
<body>
    <?php
    include("../conexion.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM auto WHERE id=$id";
    $res = mysqli_query($con, $sql);
    $auto = mysqli_fetch_array($res);

    if (!$auto) echo "no se encontro el auto";
    ?>
  
    <h2>Modificar</h2>
    <form class="container mt-5" method="POST" action="./updateCtrl.php">
    <div class="form-group">
      <label for="name">id</label>
      <input readonly type="text" class="form-control" name="id" placeholder="id" value="<?php echo $auto['id'] ?>">
    </div>
    <div class="form-group">
      <label for="name">Marca</label>
      <input type="text" class="form-control" name="marca" placeholder="marca" value="<?php echo $auto['marca'] ?>">
    </div>
    <div class="form-group">
      <label for="address">Modelo</label>
      <input type="text" class="form-control" name="modelo" placeholder="modelo" value="<?php echo $auto['modelo'] ?>">
    </div>
    <div class="form-group">
      <label for="city">Color</label>
      <input type="text" class="form-control" name="color" placeholder="color" value="<?php echo $auto['color'] ?>">
    </div>
    <div class="form-group">
      <label for="phone">precio venta</label>
      <input type="number" class="form-control" name="pventa" placeholder="pventa" value="<?php echo $auto['pventa'] ?>">
    </div>
    <div class="form-group">
      <label for="falta">Cliente id</label>
      <input type="number" class="form-control" name="clienteId" placeholder="clienteId" value="<?php echo $auto['clienteId'] ?>">
    </div>
    <input type="submit" class="btn btn-primary" name="registrar" value="Editar"/>
  </form>
</body>
</html>  
