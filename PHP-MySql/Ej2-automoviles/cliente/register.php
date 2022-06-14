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
  <form class="container mt-5" method="POST" action="./register.php">
    <div class="form-group">
      <label for="name">nombre</label>
      <input type="text" class="form-control" name="name" placeholder="name">
    </div>
    <div class="form-group">
      <label for="address">direccion</label>
      <input type="text" class="form-control" name="address" placeholder="address">
    </div>
    <div class="form-group">
      <label for="city">ciudad</label>
      <input type="text" class="form-control" name="city" placeholder="city">
    </div>
    <div class="form-group">
      <label for="phone">Telefono</label>
      <input type="number" class="form-control" name="phone" placeholder="phone">
    </div>
    <div class="form-group">
      <label for="falta">Falta</label>
      <input type="date" class="form-control" name="falta" placeholder="falta">
    </div>
    <input type="submit" class="btn btn-primary" name="registrar" value="registrar"/>
  </form>

  <?php
    include("../conexion.php");

    if (isset($_POST["registrar"])) {
      $name = $_POST["name"];
      $address = $_POST["address"];
      $city = $_POST["city"];
      $phone = $_POST["phone"];
      $falta = $_POST["falta"];

      $sql = "INSERT INTO `cliente` (`nombre`, `direccion`, `ciudad`, `telefono`, `falta`) VALUES ('$name', '$address', '$city', '$phone', '$falta')";

      $res = mysqli_query($con, $sql);
  
      if ($res) {
        echo "Registo Exitoso";
      }
      else {
        echo "Intentalo nuevamente";
      }
    }
  ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>