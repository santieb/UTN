<?php
  include("../conexion.php");

  $id = $_POST["id"];
  $name = $_POST["name"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $phone = $_POST["phone"];
  $falta = $_POST["falta"];

  $sql="UPDATE cliente SET nombre='$name', direccion='$address', ciudad='$city ', telefono='$phone', falta='$falta' WHERE id=$id";
  $res = mysqli_query($con, $sql);

  if ($res) echo "<br> Modificacion Exitosa";
  else echo "<br> Error : $res";
?>