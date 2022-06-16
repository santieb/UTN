<?php
  include("../conexion.php");
  $id = $_GET["cod_cliente"];
    
  $sql = "DELETE FROM cliente WHERE cod_cliente=$id";
  $res = mysqli_query($con, $sql);
  if($res) echo "Elimnado correctamente";
  else echo "Error";
?>

