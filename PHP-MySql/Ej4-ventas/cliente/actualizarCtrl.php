<?php
    include("../conexion.php");

    echo "<a href='../menu.html'>ir al menu</a>";
    if (isset($_POST['enviar'])) {
      $id = $_POST['id'];
      $nom = $_POST['nom'];
      $dni = $_POST['dni'];
      $direccion = $_POST['direccion'];
      $ciudad = $_POST['ciudad'];

      if ($ciudad == "tolhuin" || $ciudad == "ushuaia" || $ciudad == 'riogrande') {
        $sql = "UPDATE cliente SET nomyape='$nom', dni='$dni', direccion='$direccion', ciudad='$ciudad' WHERE cod_cliente=$id";

        $res = mysqli_query($con, $sql);

        if ($res) {
          echo 'actualizado';
        } else echo 'error';
      } else echo 'ciudad invalida';
    }
  ?>