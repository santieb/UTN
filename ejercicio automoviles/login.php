<?php
  include("./conexion.php");

  $user = $_POST["user"];
  $pass = $_POST["contraseña"];

  $sql = "SELECT * FROM `user` WHERE USER='$user' AND pass='$pass'";

  $res = mysqli_query($con, $sql);
  

  if (mysqli_num_rows($res)>0) {
    echo "Login Exitoso";
    echo "<a href='./main.html'>Ir al inicio</a>";
    echo $res;
  }
  else {
    echo "usuario no encontrado";
  }
?>
