<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Mascota</title>
</head>
<body style="margin: 5%;">
    <h1>Listado de Mascotas</h1>
    <?php
    include("../conexion.php");
    $sql = "SELECT M.*, R.nomyape FROM mascota M, responsable R WHERE M.id_responsable=R.id_responsable";
    $res = mysqli_query($con, $sql);
    $cant = mysqli_num_rows($res);
    if($cant > 0){

    ?>

    <table border="4">
        <tr>
            <td>Identificacion</td>
            <td>Nombre</td>
            <td>Fecha Nac</td>
            <td>Especie</td>
            <td>Raza</td>
            <td>Responsable</td>
            <td>Modificar</td>
            <td>Eliminar</td>

        </tr>
    
    <?php
    while($vec = mysqli_fetch_array($res)){
        echo "<tr>";
            echo"<td> $vec[0] </td>";
            echo"<td> $vec[1] </td>";
            echo"<td> $vec[2] </td>";
            echo"<td> $vec[3] </td>";
            echo"<td> $vec[4] </td>";
            echo"<td> $vec[6] </td>";
            echo"<td> <a href='../modificar/form-modif-masc.php?cod=$vec[0]'> Modificar </a> </td>";
            echo"<td> <a href='../eliminar/elim-masc.php?cod=$vec[0]'> Eliminar </a> </td>";
        echo "</tr>";
    }
    echo"</table>";
    } else {
        echo"<p>No hay mascotas registradas</p>";
    }

    ?>
</body>
</html>