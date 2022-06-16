<?php
  include("../conexion.php");
  $id = $_GET["id"];
    
  $sql = "DELETE FROM auto WHERE id=$id";
  $res = mysqli_query($con, $sql);
  if($res) echo "Elimnado correctamente";
  else echo "Error";
?>

