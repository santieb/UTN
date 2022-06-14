<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Responsable</title>
</head>
<body style="margin: 5%;">
    <h1>Listado de Responsables</h1>
    <?php                                   //etiqueta de apertura, aca va condigo php
    include("../conexion.php");                                 //al hacer este include puedo llamar a las variables del otro archivo
    $sql="SELECT * FROM responsable";                        //siempre las variables se ponen con signo peso
    $res= mysqli_query($con, $sql);                          //recibe dos parametros, como primero el string de concexcion y segundo al consulta
    $cant= mysqli_num_rows($res);
    if ($cant>0){
        
    ?>
                                        <!-- Aca cierro la etiqueta de php para poder poner html, podria haberlo hecho tambien con el echo" " -->
    <table border='4'>
        <tr>
            <td>Identificacion</td>
            <td>Nombre y Apellido</td>
            <td>Direccion</td>
            <td>Telefono</td>
            <td>Email</td>
            <td>Modificar</td>
            <td>Eliminar</td>
        </tr>
    

    <?php
    while($vec= mysqli_fetch_array($res)){
        echo"<tr>";
            echo"<td> $vec[0] </td>";
            echo"<td> $vec[1] </td>";
            echo"<td> $vec[2] </td>";
            echo"<td> $vec[3] </td>";
            echo"<td> $vec[4] </td>";
            echo"<td> <a href='../modificar/form-modif-respo.php?cod=$vec[0]'> Modificar </a> </td>";
            echo"<td> <a href='../eliminar/elim-resp.php?cod=$vec[0]'> Eliminar </a> </td>";
        echo"</tr>";
    }
    echo"</table>";
    } else {
        echo"<p> No hay responsables registrados</p>";                        //en este echo podemos poner html
    }
                            //etiqueta de cierre
    ?>                                      

</body>
</html>
