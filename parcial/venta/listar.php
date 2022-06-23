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

    $sql = "SELECT * from propietario, inmueble, venta, comprador where propietario.id=inmueble.propietario and venta.comprador=comprador.comprador and venta.inmueble=inmueble.id";

    $res = mysqli_query($con, $sql);
    
    echo "<table>";
    echo "<tr>";
    echo "<td>id venta</td>";
    echo "<td>propiuetario</td>";
    echo "<td>fecha inmueble</td>";
    echo "<td>subtotal</td>";
    echo "<td>supcontruida</td>";
    echo "<td>precio</td>";
    echo "<td>fecha venta</td>";
    echo "<td>precio venta</td>";
    echo "<td>commision</td>";
    echo "<td>comprador</td>";
    echo "<tr>";

    foreach ($res as $row) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['nombre']."</td>";
        echo "<td>".$row['fecha']."</td>";
        echo "<td>".$row['suptotal']."</td>";
        echo "<td>".$row['superficie']."</td>";
        echo "<td>".$row['precio']."</td>";
        echo "<td>".$row['fecha']."</td>";
        echo "<td>".$row['precioventa']."</td>";
        echo "<td>".$row['comision']."</td>";
        echo "<td>".$row['nombrecomprador']."</td>";
        echo "<td>";
        echo "<a href='modificar.php?id=".$row['id']."'>modificar</a>";
        echo "</td>";
        echo "</tr>";
    }
echo "</table>";
  ?>
</body>
</html>