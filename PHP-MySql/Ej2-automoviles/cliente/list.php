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
    $sql = "SELECT * FROM cliente";
    $res = mysqli_query($con, $sql);
    $cant = mysqli_num_rows($res);
    if($cant > 0) {
        echo "<table class='table'>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Nombre</th>";
        echo "<th>Direccion</th>";
        echo "<th>Ciudad</th>";
        echo "<th>Telefono</th>";
        echo "<th>Falta</th>";
        echo "<th>Acciones</th>";
        echo "</tr>";

        foreach ($res as $row) {
          echo "<tr>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['nombre']."</td>";
          echo "<td>".$row['direccion']."</td>";
          echo "<td>".$row['ciudad']."</td>";
          echo "<td>".$row['telefono']."</td>";
          echo "<td>".$row['falta']."</td>";
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