<?php

    session_start();
    error_reporting(0);
   $varsesion = $_SESSION['usuario'];
   if($varsesion == null || $varsesion = ''){
       echo'No posee privilegios de acceso';
       die();
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <h5>Bienvenido</h5>
    <h7>Hola: <?php echo $_SESSION['usuario']?></h7>
    <a href="cerrar-sesion.php">Cerrar sesión</a>

    <br><br>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <?php
        include("conection.php");

        
        $id= $_GET['id'];
        $sql="SELECT * FROM usuarios WHERE id= '$id'";
        $resul= mysqli_query($con, $sql);

        $fila = mysqli_fetch_array($resul);

        $nombre = $fila['nombre'];
        $email = $fila['email'];
        $tipo = $fila['tipo'];
        $pass = $fila['pass'];

    ?>                    
    <div class="container mt-3">
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id;?>">

        <input type="text" class="form-control mb-3" name="nombre" value="<?php echo $nombre;?>">
        <input type="text" class="form-control mb-3" name="email" value="<?php echo $email;?>">
        <input type="text" class="form-control mb-3" name="tipo" value="<?php echo $tipo;?>">
        <input type="text" class="form-control mb-3" name="password" value="<?php echo $pass;?>">
        <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
    </form>
    </div>    
</body>
</html>