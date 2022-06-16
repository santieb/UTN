<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="POST" action='./login.php'>
    <label for="">Usuario</label>
    <input type="text" name="user"></input>
    <label for="">pass</label>
    <input type="text" name="pass"></input>
    <input type='submit' name='enviar' value='enviar'>
  </form>

  <?php
    include("../conexion.php");

    if (isset($_POST['enviar'])) {
      $user = $_POST['user'];
      $pass = $_POST['pass'];

      $sql = "SELECT * FROM usuario u where u.user = '$user' and u.pass = '$pass'";

      $res = mysqli_query($con, $sql);

      if (mysqli_num_rows($res) > 0) {
        echo "<a href='../menu.html'>Menu</a>";
      } else echo 'intentalo otra vez';
    }

  ?>

</body>
</html>