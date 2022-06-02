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
    $sql = "SELECT * FROM cliente WHERE id=$id";
    $res = mysqli_query($con, $sql);
    $client = mysqli_fetch_array($res);

    if (!$client) echo "no se encontro el cliente";
    ?>

    <h2>Modificar</h2>
    <form class="container mt-5" method="POST" action="./updateCtrl.php">
    <div class="form-group">
      <label for="name">id</label>
      <input readonly type="text" class="form-control" name="id" placeholder="id" value="<?php echo $client['id'] ?>">
    </div>
    <div class="form-group">
      <label for="name">nombre</label>
      <input type="text" class="form-control" name="name" placeholder="name" value="<?php echo $client['nombre'] ?>">
    </div>
    <div class="form-group">
      <label for="address">direccion</label>
      <input type="text" class="form-control" name="address" placeholder="address" value="<?php echo $client['direccion'] ?>">
    </div>
    <div class="form-group">
      <label for="city">ciudad</label>
      <input type="text" class="form-control" name="city" placeholder="city" value="<?php echo $client['ciudad'] ?>">
    </div>
    <div class="form-group">
      <label for="phone">Telefono</label>
      <input type="number" class="form-control" name="phone" placeholder="phone" value="<?php echo $client['telefono'] ?>">
    </div>
    <div class="form-group">
      <label for="falta">Falta</label>
      <input type="date" class="form-control" name="falta" placeholder="falta" value="<?php echo $client['falta'] ?>">
    </div>
    <input type="submit" class="btn btn-primary" name="registrar" value="Editar"/>
  </form>
</body>
</html>  
