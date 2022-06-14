<?php
  include("../conexion.php");

  $id = $_POST["id"];
  $titulo = $_POST["titulo"];
  $editorial = $_POST["editorial"];
  $fedicion = $_POST["fedicion"];
  $idioma = $_POST["idioma"];
  $paginas = $_POST["cantpaginas"];
  $estado = $_POST['estado'];

  echo $estado;

  if ($estado == 'biblioteca' ||  $estado == 'reparacion' ||  $estado == 'prestado') {
    $sql="UPDATE libro SET titulo='$titulo', editorial='$editorial', fedicion='$fedicion', idioma='$idioma', cantpaginas='$paginas', estado='$estado' WHERE id=$id";
    $res = mysqli_query($con, $sql);
  
    if ($res) echo "<br> Modificacion Exitosa";
    else echo "<br> Error : $res";
  }
  else echo 'El estado no es valido';
?>