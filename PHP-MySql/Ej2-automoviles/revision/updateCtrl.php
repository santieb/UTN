<?php
  include("../conexion.php");

  $id = $_POST["id"];
  $fingreso = $_POST["fingreso"];
  $fegreso = $_POST["fegreso"];
  $estado = $_POST["estado"];
  $cambiofiltro = $_POST["cambiofiltro"];
  $cambioaceite = $_POST["cambioaceite"];
  $cambiofreno = $_POST["cambiofreno"];
  $descripcion = $_POST["descripcion"];
  $autoid = $_POST["autoid"];

  $sql = "SELECT * FROM auto WHERE id=$autoid";
  $res = mysqli_query($con, $sql);
  $client = mysqli_fetch_array($res);

  if(!$client) {
    echo "El auto no existe";
  }
  else {
    $sql="UPDATE revision SET fingreso='$fingreso', fegreso='$fegreso', estado='$estado ', cambiofiltro='$cambiofiltro', cambioaceite='$cambioaceite', cambiofreno='$cambiofreno', descripcion='$descripcion', autoid='$autoid' WHERE id=$id";
    $res = mysqli_query($con, $sql);
  
    if ($res) echo "<br> Modificacion Exitosa";
    else echo "<br> Error : $res";
  }
?>