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
      <label for="fingreso">fingreso</label>
      <input type="date" class="form-control" name="fingreso" placeholder="fingreso">
    </div>
    <div class="form-group">
      <label for="fegreso">fegreso</label>
      <input type="date" class="form-control" name="fegreso" placeholder="fegreso">
    </div>
    <div class="form-group">
      <label for="estado">estado</label>
      <input type="text" class="form-control" name="estado" placeholder="estado">
    </div>
    <div class="form-group">
      <label for="cambiofiltro">cambio filtro</label>
      <input type="text" class="form-control" name="cambiofiltro" placeholder="cambiofiltro">
    </div>
    <div class="form-group">
      <label for="cambioaceite">cambio aceite</label>
      <input type="text" class="form-control" name="cambioaceite" placeholder="cambioaceite">
    </div>
    <div class="form-group">
      <label for="cambiofreno">cambio freno</label>
      <input type="text" class="form-control" name="cambiofreno" placeholder="cambiofreno">
    </div>
    <div class="form-group">
      <label for="descripcion">descripcion</label>
      <input type="text" class="form-control" name="descripcion" placeholder="descripcion">
    </div>
    <div class="form-group">
      <label for="autoid">auto id</label>
      <input type="number" class="form-control" name="autoid" placeholder="autoid">
    </div>
    <input type="submit" class="btn btn-primary" name="registrar" value="registrar"/>
  </form>

  <?php
    include("../conexion.php");

    if (isset($_POST["registrar"])) {
      $fingreso = $_POST["fingreso"];
      $fegreso = $_POST["fegreso"];
      $estado = $_POST["estado"];
      $cambiofiltro = $_POST["cambiofiltro"];
      $cambioaceite = $_POST["cambioaceite"];
      $cambiofreno = $_POST["cambiofreno"];
      $descripcion = $_POST["descripcion"];
      $autoid = $_POST["autoid"];

      $sql = "SELECT * FROM auto WHERE id=$autoid";
      $res = mysqli_query($con, $sql);
      $auto = mysqli_fetch_array($res);

      if(!$auto) {
        echo "El auto no existe";
      }
      else {
        $sql = "INSERT INTO `revision` (`fingreso`, `fegreso`, `estado`, `cambiofiltro`, `descripcion`, `autoid`) VALUES ('$fingreso', '$fegreso', '$estado', '$cambiofiltro', '$descripcion', '$autoid')";

        $res = mysqli_query($con, $sql);
    
        if ($res) {
          echo "Registo Exitoso";
        }
        else {
          echo "Intentalo nuevamente";
        }
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