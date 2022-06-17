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
        include("./conexion.php");
        $sql = "SELECT * FROM revision, auto, cliente where revision.fegreso = '0000-00-0' and auto.cod_auto = revision.cod_auto and auto.cod_cliente = cliente.cod_cliente";

        $res = mysqli_query($con, $sql);
        echo "<table>";
            echo "<tr>";
            echo "<td>cod revision</td>";
            echo "<td>fingreso</td>";
            echo "<td>fegreso</td>";
            echo "<td>estado</td>";
            echo "<td>cambiofiltro</td>";
            echo "<td>cambioaceite</td>";
            echo "<td>cambiofreno</td>";
            echo "<td>descripcion</td>";
            echo "<td>nombre</td>";
            echo "<td>marca</td>";
            echo "<td>modelo</td>";
            echo "<td>km</td>";
            echo "<td>acciones</td>";
            echo "<tr>";

            foreach ($res as $row) {
                echo "<tr>";
                echo "<td>".$row['cod_revision']."</td>";
                echo "<td>".$row['fingreso']."</td>";
                echo "<td>".$row['fegreso']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td>".$row['cambio_filtro']."</td>";
                echo "<td>".$row['cambio_aceite']."</td>";
                echo "<td>".$row['cambio_freno']."</td>";
                echo "<td>".$row['descripcion']."</td>";
                echo "<td>".$row['nomyape']."</td>";
                echo "<td>".$row['marca']."</td>";
                echo "<td>".$row['modelo']."</td>";
                echo "<td>".$row['km']."</td>";
                echo "<td>";
                echo "<a href='revisar.php?id=".$row['cod_revision']."'>Revisar</a>";
                echo "</td>";
                echo "</tr>";
            }
       echo "</table>";
    ?>
</body>
</html>