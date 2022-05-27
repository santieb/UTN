<?php
  include("../conexion.php");

  $nya = $_POST["name"];
  $direccion = $_POST["address"];
  $telefono = $_POST["phone"];
  $email = $_POST["email"];

  $sql = "INSERT INTO responsable (nomyape, direccion, telefono, email) VALUES ('$nya', '$direccion', $telefono, '$email')";

  $res = mysqli_query($con, $sql);

  if ($res) {
    echo "Registo Exitoso";
  }
  else {
    echo $sql;
  }
?>