<?php 
include("../conexion.php");
$idres = $_GET["cod"];

$sql = "DELETE FROM responsable WHERE id_responsable=$idres";
$res = mysqli_query($con, $sql);
if($res){
    echo "Responsable eliminado";
} else {
    echo "Error, verifique: $res";
}

?>