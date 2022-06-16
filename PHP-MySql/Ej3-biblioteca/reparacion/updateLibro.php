<?php
  include("../conexion.php");

  $id = $_GET["id"];

  $sql = "UPDATE libro SET estado='biblioteca' WHERE id=$id";
  $res = mysqli_query($con, $sql);
  
  $Object = new DateTime();  
  $date = $Object->format("Y-m-d"); 

  $sql2 = "UPDATE reparacion SET fegreso='$date' WHERE libro=$id";
  
  $res2 = mysqli_query($con, $sql2);
  if ($res && $res2) echo "<br> Modificacion Exitosa";
  else echo "<br> Error : $res";
?>