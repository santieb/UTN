<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <h1>Listado de responsables</h1>

  <?php
    include("conexion.php");
    $sql = "SELECT * FROM mascota";
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
      echo "<p>No hay responsables registrados</p>";
    }
  ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>