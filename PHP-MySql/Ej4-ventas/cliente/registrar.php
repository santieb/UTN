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
    <label>nombre<label>
    <input type="text" name="nom">
    <label>dni<label>
    <input type="number" name="dni">
    <label>direccion<label>
    <input type="text" name="direccion">
    <label>ciudad<label>
    <input type="text" name="ciudad">
    <input type="submit" name="enviar" value="enviar"/>
  </form>

  <?php
    include("../conexion.php");

    echo "<a href='../menu.html'>ir al menu</a>";
    if (isset($_POST['enviar'])) {
      $nom = $_POST['nom'];
      $dni = $_POST['dni'];
      $direccion = $_POST['direccion'];
      $ciudad = $_POST['ciudad'];

      if ($ciudad == "tolhuin" || $ciudad == "ushuaia" || $ciudad == 'riogrande') {
        $sql = "INSERT INTO `cliente` (`nomyape`, `dni`, `direccion`, `ciudad`) VALUES ('$nom', '$dni', '$direccion', '$ciudad')";

        $res = mysqli_query($con, $sql);

        if ($res) {
          echo 'creado';
        } else echo 'error';
      } else echo 'ciudad invalida';
    }
  ?>
</body>
</html>