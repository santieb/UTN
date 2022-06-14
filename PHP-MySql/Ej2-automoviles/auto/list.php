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
    $sql = "SELECT * FROM auto";
    $res = mysqli_query($con, $sql);
    $cant = mysqli_num_rows($res);
    if($cant > 0) {
        echo "<table class='table'>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Marca</th>";
        echo "<th>Modelo</th>";
        echo "<th>Color</th>";
        echo "<th>Precio de venta</th>";
        echo "<th>Cliente id</th>";
        echo "<th>Acciones</th>";
        echo "</tr>";

        foreach ($res as $row) {
          echo "<tr>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['marca']."</td>";
          echo "<td>".$row['modelo']."</td>";
          echo "<td>".$row['color']."</td>";
          echo "<td>".$row['pventa']."</td>";
          echo "<td>".$row['clienteId']."</td>";
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