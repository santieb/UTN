<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Historias Clinicas</title>
</head>
<body style="margin: 5%;">
    <h1>Listado de Historias Clinicas</h1>
    <?php
    include("../conexion.php");
    $sql = "SELECT * FROM historiaclinica";
    $res = mysqli_query($con, $sql);
    $cant = mysqli_num_rows($res);
    if($cant > 0) {
    
    ?>
        <table border="4">
        <tr>
            <td>Identificacion</td>
            <td>Fecha de Registro</td>
            <td>Tipo de Sangre</td>
            <td>Peso</td>
            <td>Altura</td>
            <td>Id Mascota</td>
        </tr>
    
    <?php
    while($vec = mysqli_fetch_array($res)){
        echo "<tr>";
            echo "<td> $vec[0] </td>";
            echo "<td> $vec[1] </td>";
            echo "<td> $vec[2] </td>";
            echo "<td> $vec[3] </td>";
            echo "<td> $vec[4] </td>";
            echo "<td> $vec[5] </td>";
        echo "</tr>";
    }
    echo "</table>";
    } else {
        echo "<p> No hay historias clinicas registradas </p>";
    }
    ?>


    
</body>
</html>