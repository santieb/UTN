<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  include("../conexion.php");
  $sql = "SELECT * FROM producto";
  $res = mysqli_query($con, $sql);
  $cant = mysqli_num_rows($res);
  if ($cant > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>nombre</th>";
    echo "<th>punitario</th>";
    echo "<th>categoria</th>";
    echo "<th>stock</th>";
    echo "<th>proveedor</th>";
    echo "</tr>";
    foreach ($res as $row) {
      echo "<tr>";
      echo "<td>".$row['cod_producto']."</td>";
      echo "<td>".$row['nombre']."</td>";
      echo "<td>".$row['punitario']."</td>";
      echo "<td>".$row['categoria']."</td>";
      echo "<td>".$row['stock']."</td>";
      echo "<td>";
      echo "<a href='./actualizar.php?cod_producto=".$row['cod_producto']."'>actualizar</a>";
      echo "<a href='./eliminar.php?cod_producto=".$row['cod_producto']."'>Eliminar</a>";
      echo "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "No hay registros";
  }

  ?>
</body>
</html>