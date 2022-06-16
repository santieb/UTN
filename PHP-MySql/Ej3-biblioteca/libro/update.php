<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Formulario</title>
</head>
    <?php
    include("../conexion.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM libro WHERE id=$id";
    $res = mysqli_query($con, $sql);
    $libro = mysqli_fetch_array($res);

    if (!$libro) echo "no se encontro el libro";
    ?>
  <body>
    <h2>Modificar</h2>
    <form class="container mt-5" method="POST" action="./updateCtrl.php">
    <div class="form-group">
      <label for="name">id</label>
      <input readonly type="text" class="form-control" name="id" placeholder="id" value="<?php echo $libro['id'] ?>">
    </div>
    <div class="form-group">
      <label for="titulo">titulo</label>
      <input type="text" class="form-control" name="titulo" placeholder="titulo" value="<?php echo $libro['titulo'] ?>">
    </div>
    <div class="form-group">
      <label for="editorial">editorial</label>
      <input type="text" class="form-control" name="editorial" placeholder="editorial" value="<?php echo $libro['editorial'] ?>">
    </div>
    <div class="form-group">
      <label for="fedicion">fedicion</label>
      <input type="text" class="form-control" name="fedicion" placeholder="fedicion" value="<?php echo $libro['fedicion'] ?>">
    </div>
    <div class="form-group">
      <label for="idioma">idioma</label>
      <input type="text" class="form-control" name="idioma" placeholder="idioma" value="<?php echo $libro['idioma'] ?>">
    </div>
    <div class="form-group">
      <label for="cantpaginas">cantpaginas</label>
      <input type="number" class="form-control" name="cantpaginas" placeholder="cantpaginas" value="<?php echo $libro['cantpaginas'] ?>">
    </div>
    <div class="form-group">
      <label for="estado">estado</label>
      <input type="text" class="form-control" name="estado" placeholder="estado" value="<?php echo $libro['estado'] ?>">
    </div>
    <input type="submit" class="btn btn-primary" name="registrar" value="Editar"/>
  </form>
</body>
</html>  
