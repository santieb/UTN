<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="./registrar.php">
        <label>fingreso</label>
        <input type="date" name="fingreso">
        <label>estado</label>
        <select name="estado">
            <option value="1">en espera</option>
            <option value="2">en revision</option>
        </select>>
        <label>cambio filtro</label>
        <input type="number" name="filtro">
        <label>cambioaceite</label>
        <input type="number" name="aceite">
        <label>cambiofreno</label>
        <input type="number" name="freno">
        <label>descripcion</label>
        <input type="text" name="descripcion">
        <label>id_vehiculo</label>
        <select name="id">
            <?php
                include("./conexion.php");
                $sql = "SELECT * FROM auto";
                $resultado = mysqli_query($con, $sql);
                while($fila = mysqli_fetch_array($resultado)){
                    echo "<option value='".$fila['cod_auto']."'>".$fila['cod_auto']."</option>";
                }
            ?>
        </select>
        <input type="submit" name="enviar" value="enviar"></input>
    </form>

    <?php
        include("./conexion.php");

        if (isset($_POST['enviar'])) {
            $id = $_POST['id'];	
            $fingreso = $_POST['fingreso'];
            $estado = $_POST['estado'];
            $filtro = $_POST['filtro'];
            $aceite = $_POST['aceite'];
            $freno = $_POST['freno'];
            $descripcion = $_POST['descripcion'];

            $sql2 = "SELECT * FROM revision WHERE revision.cod_auto = '$id'";
            $resultado2 = mysqli_query($con, $sql);

            if (mysqli_num_rows($resultado2) > 0) {
                $sql3 = "SELECT * FROM auto WHERE cod_auto = '$id'";
                $resultado3 = mysqli_query($con, $sql3);
                
                $resauto = mysqli_fetch_array($resultado3);
                $km = $resauto['km'];

                if (mysqli_num_rows($resultado2) * 10000 >= km) {
                    $sql = "INSERT INTO revision (fingreso, estado, cambio_filtro, cambio_aceite, cambio_freno, descripcion, cod_auto) VALUES ('$fingreso', '$estado', '$filtro', '$aceite', '$freno', '$descripcion', '$id')";
                    $res = mysqli_query($con, $sql);
        
                    if ($res) {
                        echo "Se registro correctamente";
                    } else {
                        echo "No se registro";
                    }
                }
            }
        }
    ?>
</body>
</html>