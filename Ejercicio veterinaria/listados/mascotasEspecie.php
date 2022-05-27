<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulario Mascota</title>
</head>
<body>
<form class="container mt-5 b-red" action="./mascotasEspecie.php" method="POST">
  <div class="form-group">
    <label for="especie">Especie</label>
    <select  class="form-control" name="especie" id="especie" placeholder="especie">

    <?php
    include("../conexion.php");

    $sql = "SELECT DISTINCT M.especie FROM mascota M";
    $res = mysqli_query($con, $sql);

    while($vec=mysqli_fetch_array($res)) {
        echo "<option> $vec[0]</option>";
      }
    ?>

    </select>
  </div>
  <div class="form-group">
    <label for="fechaInicial">Desde</label>
    <input type="date" class="form-control" name="fechaInicial" id="fechaInicial" placeholder="Fecha Inicial">
  </div>
  <div class="form-group">
    <label for="fechLimite">Hasta</label>
    <input type="date" class="form-control" name="fechaLimite" id="fechaLimite" placeholder="Fecha limite">
  </div>
  <input id="buscar" name="buscar" type="submit" class="btn btn-primary" value="buscar"/>
  </form>

  <?php
  include("../conexion.php");

    if (isset($_POST["buscar"])) {

       $especie = $_POST["especie"];
       $fechaInicial = $_POST["fechaInicial"];
       $fechaLimite = $_POST["fechaLimite"];

       $sql = "SELECT * FROM mascota WHERE mascota.especie=$especie AND mascota.fnacimiento >= $fechaInicial AND mascota.fnacimiento <= $fechaLimite";


       $res = mysqli_query($con, $sql);

       $cant = mysqli_num_rows($res);

       if ($cant > 0) {
       
     ?>

        <table style="table">
        <tr>
            <td>Identificaciòn</td>
            <td>Nombre</td>
            <td>Fecha de nacimiento</td>
            <td>Especie</td>
            <td>raza</td>
            <td>id responsable</td>
        <tr>
         
        <?php
            while($vec=mysqli_fetch_array($res)) {
            echo "<tr>
            <td> $vec[0]</td>
            <td> $vec[1]</td>
            <td> $vec[2]</td>
            <td> $vec[3]</td>
            <td> $vec[4]</td>
            <td>$vec[5]</td>
            <tr>";
            }
            echo "</table>";
        }
   
       else {
         echo "<p>No se encontraron mascotas</p>";
       }
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>