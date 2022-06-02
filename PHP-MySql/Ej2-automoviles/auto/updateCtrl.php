<?php
  include("../conexion.php");

  $id = $_POST["id"];
  $marca = $_POST["marca"];
  $modelo = $_POST["modelo"];
  $color = $_POST["color"];
  $pventa = $_POST["pventa"];
  $cliente = $_POST["clienteId"];

  $sql = "SELECT * FROM cliente WHERE id=$cliente";
  $res = mysqli_query($con, $sql);
  $client = mysqli_fetch_array($res);

  if(!$client) {
    echo "El cliente no existe";
  }
  else {
    $sql="UPDATE auto SET marca='$marca', modelo='$modelo', color='$color ', pventa='$pventa', clienteId='$cliente' WHERE id=$id";
    $res = mysqli_query($con, $sql);
  
    if ($res) echo "<br> Modificacion Exitosa";
    else echo "<br> Error : $res";
  }
?>