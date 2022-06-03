<?php
  include("../conexion.php");

  $id = $_POST["id"];
  $nomyape = $_POST["nomyape"];
  $fnacimiento = $_POST["fnacimiento"];
  $direccion = $_POST["direccion"];
  $telefono = $_POST["telefono"];
  $email = $_POST["email"];

  $sql="UPDATE socio SET nomyape='$nomyape', fnacimiento='$fnacimiento', email='$email', direccion='$direccion', telefono='$telefono' WHERE id=$id";
  $res = mysqli_query($con, $sql);
  
    if ($res) echo "<br> Modificacion Exitosa";
    else echo "<br> Error : $res";
?>