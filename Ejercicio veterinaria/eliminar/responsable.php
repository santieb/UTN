<?php
  include("../conexion.php");

  $cod = $_GET["cod"];

  $sql="DELETE FROM Responsable where id_res=$cod";

  $res=mysqli_query($con, $sql);

  if ($res) echo"<br>Responsable eliminadop";

  else echo "Error";
?>