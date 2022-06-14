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
  <form class="container mt-5" method="POST" action="./register.php">
    <div class="form-group">
      <label for="name">user</label>
      <input type="text" class="form-control" name="user" id="user" placeholder="user">
    </div>
    <div class="form-group">
      <label for="contraseña">contraseña</label>
      <input type="password" class="form-control" name="pass" id="contraseña" placeholder="contraseña">
    </div>
    <input type="submit" class="btn btn-primary" name="registrar" value="registrar"/>
  </form>

  <?php
    include("../conexion.php");

    if (isset($_POST["registrar"])) {
        $user = $_POST["user"];
        $pass = $_POST["pass"]; 

        $sql1 = "SELECT * FROM `usuario` WHERE user='$user'";

        $res1 = mysqli_query($con, $sql1);

        if (mysqli_num_rows($res1) < 1) { 
            $sql = "INSERT INTO usuario (user, pass) VALUES ('$user', '$pass')";

            $res = mysqli_query($con, $sql);
        
            if ($res) {
                echo "Registo Exitoso";
                echo "<a href='./loginForm.php'>Loguearse</a>";
            }
            else {
                echo "Intentalo nuevamente";
            } 
        }
        else echo "El usuario ya existe";
       
    }
  ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>