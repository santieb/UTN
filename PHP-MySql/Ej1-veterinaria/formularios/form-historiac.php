<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia Clinica</title>
</head>
<body style="margin:5%;">
    <h2>Historia Clinica</h2>
    <form method="POST" action="../procesar/procesarHistoriaC.php">
        <label for="fregistro">Fecha de registro</label>
        <input type="date" id="fregistro" name="fregistro">
        <br>
        <br>
        <label for="tiposangre">Tipo de Sangre</label>
        <input type="text" id="tiposangre" name="tiposangre">
        <br>
        <br>
        <label for="peso">Peso</label>
        <input type="number" id="peso" name="peso">
        <br>
        <br>
        <label for="altura">Altura</label>
        <input type="number" id="altura" name="altura">
        <br>
        <br>
        <label for="idmascota">Mascota</label>
        <select name="idmascota" id="idmascota">
            <?php
            include("../conexion.php");
            $sql = "SELECT * FROM mascota";
            $res = mysqli_query($con, $sql);
            $cant = mysqli_num_rows($res);
            if($cant > 0){
                while($vec = mysqli_fetch_row($res)){
                    echo "<option value='$vec[0]'> $vec[1] </option>";
                }
            }
            ?>
        </select>
        <br>
        <br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>  

