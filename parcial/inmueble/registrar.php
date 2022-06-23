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
    <label>suptotal</label>
    <input type="text" name="suptotal"/>
    <label>tipo</label>
    <select name="tipo">
      <option value="casa">casa</option>
      <option value="departamento">departamento</option>
      <option value="terreno">terreno</option>
    </select>
    <label>superficie construida</label>
    <input type="text" name="superficie"/>
    <label>empresa</label>
    <input type="text" name="administradora"/>
    <label>Luz</label>
    <select name="luz">
      <option value="1">si</option>
      <option value="0">no</option>
    </select>
    <label>gas</label>
    <select name="gas">
      <option value="1">si</option>
      <option value="0">no</option>
    </select>
    <label>agua</label>
    <select name="agua">
      <option value="1">si</option>
      <option value="0">no</option>
    </select>
    <label>cloaca</label>
    <select name="cloaca">
      <option value="1">si</option>
      <option value="0">no</option>
    </select>
    <label>registro</label>
    <input type="date" name="fecharegistro"/>
    <label>precio</label>
    <input type="number" name="precio"/>
    <label>propietario</label>
    <select name="propietario">
      <?php
        include("../conexion.php");
        $sql = "SELECT * FROM propietario";
        $res = mysqli_query($con, $sql);
        while ($com = mysqli_fetch_assoc($res)): ?>
          <option value="<?php echo $com['id'] ?>"><?php echo $com['id']?></option>
          <?php endwhile; ?>

        ?>
    </select>
    
    <input type="submit" name="enviar"/>
  </form>

  <?php
    include("../conexion.php");
    
    if(isset($_POST['enviar'])) {
      $suptotal = $_POST['suptotal'];
      $tipo = $_POST['tipo'];
      $superficie = $_POST['superficie'];
      $administradora = $_POST['administradora'];
      $luz = $_POST['luz'];
      $gas = $_POST['gas'];
      $agua = $_POST['agua'];
      $cloaca = $_POST['cloaca'];
      $fecharegistro = $_POST['fecharegistro'];
      $precio = $_POST['precio'];
      $propietario = $_POST['propietario'];

      $sql2 = "INSERT INTO inmueble (suptotal, tipo, superficie, administradora, luz, gas, agua, cloaca, fecharegistro, precio, propietario, estado) values ('$suptotal', '$tipo', '$superficie', '$administradora', '$luz', '$gas', '$agua', '$cloaca', '$fecharegistro', '$precio', '$propietario', 'venta')";
      $res2 = mysqli_query($con, $sql2);

      if($res2) {
        echo 'creado correctamente';
      }else echo 'error comprueba los datos';
    }
  ?>

</body>
</html>