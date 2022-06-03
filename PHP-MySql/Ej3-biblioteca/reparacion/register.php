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
      <input type="text" class="form-control" name="fingreso" placeholder="fingreso">
    </div>
    <div class="form-group">
      <label for="motivo">motivo</label>
      <input type="text" class="form-control" name="motivo" placeholder="motivo">
    </div>
    <div class="form-group">
      <label for="fegreso">fegreso</label>
      <input type="date" class="form-control" name="fegreso" placeholder="fegreso">
    </div>
    <div class="form-group">
      <label for="Libro">Libro</label>
      <select  class="form-control" name="especie" id="especie" placeholder="especie">
        <?php
        include("../conexion.php");

        $sql = "SELECT * FROM  libro";
        $res = mysqli_query($con, $sql);

        foreach ($res as $row) {
            echo "<option>".$row['id']."</option>";
          }
        ?>

        </select>
    </div>
    <input type="submit" class="btn btn-primary" name="registrar" value="registrar"/>
  </form>

  <?php
    include("../conexion.php");

    if (isset($_POST["registrar"])) {
      $titulo = $_POST["titulo"];
      $editorial = $_POST["editorial"];
      $fedicion = $_POST["fedicion"];
      $idioma = $_POST["idioma"];
      $paginas = $_POST["paginas"];
      $estado = 'biblioteca';

      $sql = "INSERT INTO `libro` (`titulo`, `editorial`, `fedicion`, `idioma`, `cantpaginas`, `estado`) VALUES ('$titulo', '$editorial', '$fedicion', '$idioma', '$paginas', '$estado')";

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