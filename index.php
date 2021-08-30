<?php
   if(isset($_POST['btn'])) {
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $cod_tra = $_POST['Codigo'];
    $tipo = $_POST['Usuario']; 
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
<form action="index.php" method="post">
  <h1>Login</h1>
  <label for="">Tipo de Usuario: </label>
  <select name="Usuario" id="">
    <option value="Productivo">Productivo</option>
    <option value="Administrador">Administrador</option>
  </select>
  <label for="">Nombre: </label>
  <input type="text" name="Nombre" value="<?php if(isset($nombre)) echo $nombre ?>">
  <label for="">Apellido: </label>
  <input type="text" name="Apellido" value="<?php if(isset($apellido)) echo $apellido ?>">
  <label for="">Codigo trabajador: </label>
  <input type="text" name="Codigo" value="<?php if(isset($cod_tra)) echo $cod_tra ?>">
  <input type="submit" value="Ingresar" name="btn">
  <?php
    include("Validar.php");
  ?>
</form>
</body>
</html>