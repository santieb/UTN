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
    <label>nombre</label>
    <input type="text" name="nombre">
    <label>documento</label>
    <input type="number" name="documento">
    <label>direccion</label>
    <input type="text" name="direccion">
    <label>telefono</label>
    <input type="number" name="telefono">
    <select name="tipo">
      <option value="propietario">propietario</option>
      <option value="comprador">comprador</option>
    </select>
    <input type="submit" name='enviar'>enviar</input>

  </form>

  <?php
    include("../conexion.php");

    if(isset($_POST['enviar'])) {
      $nombre = $_POST['nombre'];
      $documento = $_POST['documento'];
      $direccion = $_POST['direccion'];
      $telefono = $_POST['telefono'];
      $tipo = $_POST['tipo'];

      $name = '';
      if($tipo === 'propietario') $name = 'nombre';
      else $name = $nombrecomprador;

      $sql = "INSERT INTO `$tipo` ($name, `documento`, `direccion`, `telefono`) values ('$nombre', '$documento', '$direccion', '$telefono')";
      $res = mysqli_query($con, $sql);
      
      if($res) {
        echo 'creado correctamente';
      }else echo 'error comprueba los datos';
    }
    ?>
</body>
</html>