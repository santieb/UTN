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
    $sql = "SELECT * FROM socio";
    $res = mysqli_query($con, $sql);
    $cant = mysqli_num_rows($res);
    if($cant > 0) {
        echo "<table class='table'>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>nomyape</th>";
        echo "<th>fnacimiento</th>";
        echo "<th>direccion</th>";
        echo "<th>telefono</th>";
        echo "<th>email</th>";
        echo "<th>acciones</th>";
        echo "</tr>";

        foreach ($res as $row) {
          echo "<tr>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['nomyape']."</td>";
          echo "<td>".$row['fnacimiento']."</td>";
          echo "<td>".$row['direccion']."</td>";
          echo "<td>".$row['telefono']."</td>";
          echo "<td>".$row['email']."</td>";
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