<?php
    include("../conexion.php");

    echo "<a href='../menu.html'>ir al menu</a>";
    if (isset($_POST['enviar'])) {
      $id = $_POST['id'];
      $razon = $_POST['razon'];
      $direccion = $_POST['direccion'];
      $calidad = $_POST['calidad'];

      if ($calidad == "baja" || $calidad == "media" || $calidad == 'alta') {
        $sql = "UPDATE proveedor SET razonsocial='$razon', direccion='$direccion', calidad='$calidad' WHERE cod_proveedor=$id";
        $res = mysqli_query($con, $sql);

        if ($res) {
          echo 'editado correctamente';
        } else echo 'error';
      } else echo 'calidad invalida';
    }
  ?>