<?php
    include("../conexion.php");

    echo "<a href='../menu.html'>ir al menu</a>";
    if (isset($_POST['enviar'])) {
      $id = $_POST['id'];
      $nom = $_POST['nom'];
      $punitario = $_POST['punitario'];
      $categoria = $_POST['categoria'];
      $stock = $_POST['stock'];
      $proveedor = $_POST['proveedor'];

      $sql = "UPDATE `producto` SET nombre='$nom', punitario='$punitario', categoria='$categoria', stock='$stock', cod_proveedor='$proveedor' WHERE cod_producto=$id";
      
      $res = mysqli_query($con, $sql);

      if ($res) {
        echo 'actualizado';
      } else echo 'error';
    }
  ?>