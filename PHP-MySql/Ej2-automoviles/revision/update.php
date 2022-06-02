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
<body>
    <?php
    include("../conexion.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM revision WHERE id=$id";
    $res = mysqli_query($con, $sql);
    $revision = mysqli_fetch_array($res);

    if (!$revision) echo "no se encontro la revision";
    ?>

    <h2>Modificar</h2>
  <form class="container mt-5" method="POST" action="./updateCtrl.php">
    <div class="form-group">
      <label for="id">id</label>
      <input readonly type="text" class="form-control" name="id" placeholder="id" value="<?php echo $revision['id']?>">
    </div>
    <div class="form-group">
      <label for="fingreso">fingreso</label>
      <input type="date" class="form-control" name="fingreso" placeholder="fingreso" value="<?php echo $revision['fingreso'] ?>">
    </div>
    <div class="form-group">
      <label for="fegreso">fegreso</label>
      <input type="date" class="form-control" name="fegreso" placeholder="fegreso" value="<?php echo $revision['fegreso'] ?>">
    </div>
    <div class="form-group">
      <label for="estado">estado</label>
      <input type="text" class="form-control" name="estado" placeholder="estado" value="<?php echo $revision['estado'] ?>">
    </div>
    <div class="form-group">
      <label for="cambiofiltro">cambio filtro</label>
      <input type="text" class="form-control" name="cambiofiltro" placeholder="cambiofiltro" value="<?php echo $revision['cambiofiltro'] ?>">
    </div>
    <div class="form-group">
      <label for="cambioaceite">cambio aceite</label>
      <input type="text" class="form-control" name="cambioaceite" placeholder="cambioaceite" value="<?php echo $revision['cambioaceite'] ?>">
    </div>
    <div class="form-group">
      <label for="cambiofreno">cambio freno</label>
      <input type="text" class="form-control" name="cambiofreno" placeholder="cambiofreno" value="<?php echo $revision['cambiofreno'] ?>">
    </div>
    <div class="form-group">
      <label for="descripcion">descripcion</label>
      <input type="text" class="form-control" name="descripcion" placeholder="descripcion" value="<?php echo $revision['descripcion'] ?>">
    </div>
    <div class="form-group">
      <label for="autoid">auto id</label>
      <input type="number" class="form-control" name="autoid" placeholder="autoid" value="<?php echo $revision['autoid'] ?>">
    </div>
    <input type="submit" class="btn btn-primary" name="registrar" value="registrar"/>
  </form>
</body>
</html>  
