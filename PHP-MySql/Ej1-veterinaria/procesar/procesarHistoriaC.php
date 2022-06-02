<?php
include("../conexion.php");
$fregis = $_POST["fregistro"];
$tipsangre = $_POST["tiposangre"];
$peso = $_POST["peso"];
$altura = $_POST["altura"];
$idmasc = $_POST["idmascota"];

$sql = "INSERT INTO historiaclinica (fregistro, tipo_sangre, peso, altura, id_mascota) VALUES ('$fregis', '$tipsangre', $peso, $altura, $idmasc)";
$res = mysqli_query($con, $sql);
if($res){
    echo "<br> Registro Exitoso";
} else {
    echo "<br> Error : $res";
}
?>