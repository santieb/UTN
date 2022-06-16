<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="../jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="./index.js"> </script>
  <title>Document</title>
</head>
<body>
  <form method="post" action='./register.php'>
    <label>user</label>
    <input type="text" name="user">
    <label>Contrasena</label>
    <input type="text" id='pass1' name="pass1">
    <label>Repetir contrasena</label>
    <input type="text" id='pass2' name="pass2">
    <input onClick="validate()" type="submit" name="registrar" value="registrar">
    </form>

    <?php
      include("../conexion.php");

      if (isset($_POST['registrar'])) {
        $user = $_POST['user'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];

        $sql2 = "select * from `usuario` where user = '$user'";

        $res2 = mysqli_query($con, $sql2);

        if(mysqli_num_rows($res2) == 0) {
          if ($pass1 == $pass2) {

            $sql = "insert into `usuario` (`user`, `pass`) values ('$user', '$pass1')";
  
            $res = mysqli_query($con, $sql);
    
            if ($res) echo '<a href=`./login.php`>Login</a>';
    
            else echo 'intentalo otra vez';
          }
          else echo 'contrasena no coincide';
        }
        else echo 'ya hay un usuario';

      }
    ?>

</body>
</html>