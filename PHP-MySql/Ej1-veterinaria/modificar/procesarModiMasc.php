<?php
include("../conexion.php");
$id = $_POST["idmascota"];
$nom = $_POST["nommascota"];
$fn = $_POST["fnmascota"];
$esp = $_POST["especie"];
$raza = $_POST["raza"];

$sql="UPDATE mascota SET nombre='$nom', fnacimiento='$fn', especie='$esp', raza='$raza' WHERE id_mascota=$id";
$res = mysqli_query($con, $sql);
if($res){
    echo "<br> Modificacion Exitosa";
} else {
    echo "<br> Error : $res";
}
?>