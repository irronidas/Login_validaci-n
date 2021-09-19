<?php
  session_start();
   if(isset($_POST['btn'])) {
    $usuario=$_POST['Nombre'];
    $Password=$_POST['contraseña'];
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
<form action="logon.php" method="post">
  <h1>Login</h1>

  <label for="">Nombre: </label>
  <input type="text" name="Nombre" value="<?php if(isset($usuario)) echo $usuario ?>">
  
  <label for="">Contraseña: </label>
  <input type="text" name="contraseña" value="<?php if(isset($Password)) echo $Password ?>">

  <input type="submit" value="Ingresar" name="btn">

  <a style="margin: 400px" href="ayuda.php" class="enlace">Ayuda</a>
  <?php
     include("Validar.php");
  ?>
</form>
</body>
</html>