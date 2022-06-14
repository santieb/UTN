<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascota</title>
</head>
<body style="margin:5%;">
    <h2>Mascota</h2>
    <form method="POST" action="../procesar/procesarMascota.php">
        <label for="nommascota">Nombre</label>
        <input type="text" id="nommascota" name="nommascota">
        <br>
        <br>
        <label for="fnmascota">Fecha de nacimiento</label>
        <input type="date" id="fnmascota" name="fnmascota">
        <br>
        <br>
        <label for="especie">Especie</label>
        <input type="text" id="especie" name="especie">
        <br>
        <br>
        <label for="raza">Raza</label>
        <input type="text" id="raza" name="raza"> 
        <br>
        <br>
        <label for="idresponsable">Responsable</label>
        <select name="idresponsable" id="idresponsable">
            <?php
            include("../conexion.php");
            $sql = "SELECT id_responsable, nomyape FROM responsable";
            $res = mysqli_query($con, $sql);
            $cant = mysqli_num_rows($res);
            if($cant > 0){
                while($vec = mysqli_fetch_row($res)){
                    echo "<option value=$vec[0]> $vec[1] </option>";
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


