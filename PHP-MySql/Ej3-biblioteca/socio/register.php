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
      <label for="nomyape">nomyape</label>
      <input type="text" class="form-control" name="nomyape" placeholder="nomyape">
    </div>
    <div class="form-group">
      <label for="fnacimiento">fnacimiento</label>
      <input type="date" class="form-control" name="fnacimiento" placeholder="fnacimiento">
    </div>
    <div class="form-group">
      <label for="direccion">direccion</label>
      <input type="text" class="form-control" name="direccion" placeholder="direccion">
    </div>
    <div class="form-group">
      <label for="telefono">telefono</label>
      <input type="number" class="form-control" name="telefono" placeholder="telefono">
    </div>
    <div class="form-group">
      <label for="email">email</label>
      <input type="email" class="form-control" name="email" placeholder="email">
    </div>
    <input type="submit" class="btn btn-primary" name="registrar" value="registrar"/>
  </form>

  <?php
    include("../conexion.php");

    if (isset($_POST["registrar"])) {
      $nomyape = $_POST["nomyape"];
      $fnacimiento = $_POST["fnacimiento"];
      $direccion = $_POST["direccion"];
      $telefono = $_POST["telefono"];
      $email = $_POST["email"];

      $sql = "INSERT INTO `socio` (`nomyape`, `fnacimiento`, `direccion`, `telefono`, `email`) VALUES ('$nomyape', '$fnacimiento', '$direccion', '$telefono', '$email')";

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