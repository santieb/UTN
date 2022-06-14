<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
</head>
<body>
    <h1>Listado</h1>
    <?php
    include("../conexion.php");
    $sql = SELECT reparacion.id libro.* FROM reparacion, libro where reparacion.libro = libro.id";
    $res = mysqli_query($con, $sql);
    $cant = mysqli_num_rows($res);
    if($cant > 0) {
        echo "<table class='table'>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>titulo</th>";
        echo "<th>editorial</th>";
        echo "<th>fedicion</th>";
        echo "<th>idioma</th>";
        echo "<th>canntPaginas</th>";
        echo "<th>estado</th>";
        echo "<th>acciones</th>";
        echo "</tr>";

        foreach ($res as $row) {
          echo "<tr>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['titulo']."</td>";
          echo "<td>".$row['editorial']."</td>";
          echo "<td>".$row['fedicion']."</td>";
          echo "<td>".$row['idioma']."</td>";
          echo "<td>".$row['cantpaginas']."</td>";
          echo "<td>".$row['estado']."</td>";
          echo "<td>";
          echo "<a href='updateLibro.php?id=".$row['id']."'>Reparar</a>";
          echo "</td>";
          echo "</tr>";
      }
        echo "</table>";
    }
    else {
        echo "No hay registros";
    }
    ?>
</body>
</html>