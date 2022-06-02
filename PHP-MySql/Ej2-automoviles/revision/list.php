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
    $sql = "SELECT * FROM revision";
    $res = mysqli_query($con, $sql);
    $cant = mysqli_num_rows($res);
    if($cant > 0) {
        echo "<table class='table'>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>fingreso</th>";
        echo "<th>fegreso</th>";
        echo "<th>estado</th>";
        echo "<th>cambio filtro</th>";
        echo "<th>cambio aceite</th>";
        echo "<th>cambio freno</th>";
        echo "<th>descripcion</th>";
        echo "<th>cambio id</th>";
        echo "</tr>";

        foreach ($res as $row) {
          echo "<tr>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['fingreso']."</td>";
          echo "<td>".$row['fegreso']."</td>";
          echo "<td>".$row['estado']."</td>";
          echo "<td>".$row['cambiofiltro']."</td>";
          echo "<td>".$row['cambioaceite']."</td>";
          echo "<td>".$row['cambiofreno']."</td>";
          echo "<td>".$row['descripcion']."</td>";
          echo "<td>".$row['autoid']."</td>";
          echo "<td>";
          echo "<a href='update.php?id=".$row['id']."'>Editar</a>";
          echo "&nbsp;&nbsp;";
          echo "<a href='delete.php?id=".$row['id']."'>Eliminar</a>";
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