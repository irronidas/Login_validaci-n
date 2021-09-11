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
    <title>Document</title>
    <h5>Operador</h1>
    <h7>Hola: <?php echo $_SESSION['usuario']?></h2>
    <a href="cerrar-sesion.php">Cerrar sesión</a>
</head>
<body>

</body>
</html>