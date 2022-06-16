<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post" action="./registrar.php">
    <label>razon social<label>
    <input type="text" name="razon">
    <label>direccion<label>
    <input type="text" name="direccion">
    <label>calidad<label>
    <input type="text" name="calidad">
    <input type="submit" name="enviar" value="enviar"/>
  </form>

  <?php
    include("../conexion.php");

    echo "<a href='../menu.html'>ir al menu</a>";
    if (isset($_POST['enviar'])) {
      $razon = $_POST['razon'];
      $direccion = $_POST['direccion'];
      $calidad = $_POST['calidad'];

      if ($calidad == "baja" || $calidad == "media" || $calidad == 'alta') {
        $sql = "INSERT INTO `proveedor` (`razonsocial`, `direccion`, `calidad`) VALUES ('$razon', '$direccion', '$calidad')";

        $res = mysqli_query($con, $sql);

        if ($res) {
          echo 'creado';
        } else echo 'error';
      } else echo 'calidad invalida';
    }
  ?>
</body>
</html>