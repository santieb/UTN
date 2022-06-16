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
  $sql = "SELECT * FROM proveedor";
  $res = mysqli_query($con, $sql);
  $cant = mysqli_num_rows($res);
  if ($cant > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>razonsocial</th>";
    echo "<th>direccion</th>";
    echo "<th>calidad</th>";
    echo "<th>acciones</th>";
    echo "</tr>";
    foreach ($res as $row) {
      echo "<tr>";
      echo "<td>".$row['cod_proveedor']."</td>";
      echo "<td>".$row['razonsocial']."</td>";
      echo "<td>".$row['direccion']."</td>";
      echo "<td>".$row['calidad']."</td>";
      echo "<td>";
      echo "<a href='./actualizar.php?cod_proveedor=".$row['cod_proveedor']."'>actualizar</a>";
      echo "<a href='./eliminar.php?cod_proveedor=".$row['cod_proveedor']."'>Eliminar</a>";
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