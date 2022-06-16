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
    <label>punitaro<label>
    <input type="number" name="punitario">
    <label>categoria<label>
    <select name="categoria">
      <option value="computacion">computacion</option>
      <option value="deportes">deportes</option>
      <option value="muebles">muebles</option>
      <option value="libreria">libreria</option>      
    </select>
    <label>stock<label>
    <input type="number" name="stock">
    <select name="proveedor">
      <?php
        include("../conexion.php");

        $sql = "SELECT * FROM  proveedor";
        $res = mysqli_query($con, $sql);

        foreach ($res as $row) {
            echo "<option>".$row['cod_proveedor']."</option>";
          }
        ?>
      ?>
    <select>
    <input type="submit" name="enviar" value="enviar"/>
  </form>

  <?php
    include("../conexion.php");

    echo "<a href='../menu.html'>ir al menu</a>";
    if (isset($_POST['enviar'])) {
      $nom = $_POST['nom'];
      $punitario = $_POST['punitario'];
      $categoria = $_POST['categoria'];
      $stock = $_POST['stock'];
      $proveedor = $_POST['proveedor'];

      $sql = "INSERT INTO `producto` (`nombre`, `punitario`, `categoria`, `stock`, `cod_proveedor`) VALUES ('$nom', '$punitario', '$categoria', '$stock', '$proveedor')";

      $res = mysqli_query($con, $sql);

      if ($res) {
        echo 'creado';
      } else echo 'error';
    }
  ?>
</body>
</html>