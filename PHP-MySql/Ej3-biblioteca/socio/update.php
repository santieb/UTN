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
    $sql = "SELECT * FROM socio WHERE id=$id";
    $res = mysqli_query($con, $sql);
    $socio = mysqli_fetch_array($res);

    if (!$socio) echo "no se encontro el socio";
    ?>

    <h2>Modificar</h2>
    <form class="container mt-5" method="POST" action="./updateCtrl.php">
    <div class="form-group">
      <label for="name">id</label>
      <input readonly type="text" class="form-control" name="id" placeholder="id" value="<?php echo $socio['id'] ?>">
    </div>
    <div class="form-group">
      <label for="nomyape">nomyape</label>
      <input type="text" class="form-control" name="nomyape" placeholder="nomyape" value="<?php echo $socio['nomyape'] ?>">
    </div>
    <div class="form-group">
      <label for="fnacimiento">fnacimiento</label>
      <input type="text" class="form-control" name="fnacimiento" placeholder="fnacimiento" value="<?php echo $socio['fnacimiento'] ?>">
    </div>
    <div class="form-group">
      <label for="direccion">direccion</label>
      <input type="text" class="form-control" name="direccion" placeholder="direccion" value="<?php echo $socio['direccion'] ?>">
    </div>
    <div class="form-group">
      <label for="telefono">telefono</label>
      <input type="text" class="form-control" name="telefono" placeholder="telefono" value="<?php echo $socio['telefono'] ?>">
    </div>
    <div class="form-group">
      <label for="email">email</label>
      <input type="email" class="form-control" name="email" placeholder="email" value="<?php echo $socio['email'] ?>">
    </div>
    <input type="submit" class="btn btn-primary" name="registrar" value="Editar"/>
  </form>
</body>
</html>  
