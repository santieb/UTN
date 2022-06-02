<?php
include("../conexion.php");
$nya = $_POST["nomyape"];
$dir = $_POST["direccion"];
$tel = $_POST["telefono"];
$email = $_POST["email"];

$sql = "INSERT INTO responsable (nomyape, direccion, telefono, email) VALUES ('$nya', '$dir', $tel, '$email')";
$res = mysqli_query($con, $sql);
if($res){
    echo "<br> Registro Exitoso";
} else{
    echo "<br> Error $res";
}
?>