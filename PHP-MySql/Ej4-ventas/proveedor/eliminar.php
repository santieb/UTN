<?php
  include("../conexion.php");
  $id = $_GET["cod_proveedor"];
    
  $sql = "DELETE FROM proveedor WHERE cod_proveedor=$id";
  $res = mysqli_query($con, $sql);
  if($res) echo "Elimnado correctamente";
  else echo "Error";
?>

