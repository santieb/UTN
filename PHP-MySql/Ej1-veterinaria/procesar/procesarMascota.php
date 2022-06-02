<?php
include("../conexion.php");
$nom = $_POST["nommascota"];
$fn = $_POST["fnmascota"];
$esp = $_POST["especie"];
$raza = $_POST["raza"];
$idresp = $_POST["idresponsable"];

$sql="INSERT INTO mascota (nombre, fnacimiento, especie, raza, id_responsable) VALUES ('$nom', '$fn', '$esp', '$raza', $idresp)";
$res = mysqli_query($con, $sql);
if($res){
    echo "<br> Registro Exitoso";
} else {
    echo "<br> Error : $res";
}
?>