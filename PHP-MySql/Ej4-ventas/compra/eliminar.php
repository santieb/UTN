<?php
  include("../conexion.php");
  $id = $_GET["cod_producto"];
    
  $sql = "DELETE FROM producto WHERE cod_producto=$id";
  $res = mysqli_query($con, $sql);
  if($res) echo "Elimnado correctamente";
  else echo "Error";
?>

