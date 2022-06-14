<?php
include("../conexion.php");
$idmas = $_GET["cod"];
$sql = "DELETE FROM mascota WHERE id_mascota=$idmas";
$res = mysqli_query($con, $sql);
if($res){
    echo "<br> Mascota eliminada con exito";
} else {
    echo "<br> Error : $res";
}
?>