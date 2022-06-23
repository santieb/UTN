<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $id = $_GET["id"];
    ?>
    <form method="post" action="./modificar.php">
        <label>id</label>
        <input readonly type="number" name="id" value="<?php echo $id; ?>"/>
        <label>Fecha</label>
        <input type="date" name="fecha"/>
        <label>comprador</label>
        <select name="comprador">
          <?php
            include("../conexion.php");
            $sql = "SELECT * FROM comprador";
            $res = mysqli_query($con, $sql);

            while ($com = mysqli_fetch_assoc($res)): ?>
              <option value="<?php echo $com['comprador'] ?>"><?php echo $com['comprador']?></option>
              <?php endwhile; ?>
          ?>
        </select>
        <label>inmueble</label>
        <select name="inmueble">
          <?php
            include("../conexion.php");
            $sql = "SELECT * FROM inmueble WHERE estado='venta'";
            $res = mysqli_query($con, $sql);

            while ($inmueble = mysqli_fetch_assoc($res)): ?>
              <option value="<?php echo $inmueble['id'] ?>"><?php echo $inmueble['id']?></option>
              <?php endwhile; ?>
          ?>
        </select>
        <input type="submit" name="enviar"/>
    </form>

    <?php
        include("conexion.php");

        if(isset($_POST['enviar'])) {
          $fecha = $_POST['fecha'];
          $inmueble = $_POST['inmueble'];
          $comprador = $_POST['comprador'];
    
          $sql = "SELECT * FROM inmueble WHERE inmueble.id = $inmueble";
          $res = mysqli_query($con, $sql);  
          $r = mysqli_fetch_assoc($res);
          
          $precioventa = $r['precio'];
          if ($r['superficie'] < $r['suptotal'] * 0.6) {
            $precioventa = $precioventa - $precioventa * 0.05;
          }
          
          $descuento = 0;
          if(!$r['luz']) $descuento = $descuento + 0.02;
          if(!$r['gas']) $descuento = $descuento + 0.02;
          if(!$r['agua']) $descuento = $descuento + 0.02;
          if(!$r['cloaca']) $descuento = $descuento + 0.02;
    
          $precioventa = $precioventa - $precioventa * $descuento;
          $comision = $precioventa * 0.1;
    
          $sql2 = "INSERT INTO venta (comprador, inmueble, precio, fecha, comision) values ('$comprador', '$inmueble', '$precioventa', '$fecha', '$comision')";
          $res2 = mysqli_query($con, $sql2);
    
          $sql2 = "UPDATE inmueble SET estado = 'comprado' where id=$inmueble";
          $res2 = mysqli_query($con, $sql2);
      
          if ($res2) echo 'creado correctamente';
          else echo 'verifica los datos';
    ?>

</body>
</html>