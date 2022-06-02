<?php
include("../conexion.php");
$idres = $_POST["idresponsable"];
$nya = $_POST["nomyape"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];

$sql = "UPDATE responsable SET nomyape='$nya', direccion='$direccion', telefono=$telefono, email='$email' WHERE id_responsable=$idres";
$res = mysqli_query($con, $sql);
if($res){
    echo"Modificacion exitosa";
} else {
    echo "Error, verifique: $res";
}


?>