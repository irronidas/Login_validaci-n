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
    <h5>Bienvenido</h5>
    <h7>Hola: <?php echo $_SESSION['usuario']?></h7>
    <a href="cerrar-sesion.php">Cerrar sesión</a>
</head>
<body>
    

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <form action="add.php" method="POST">
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                    <input type="text" class="form-control mb-3" name="email" placeholder="Email">
                    <input type="text" class="form-control mb-3" name="tipo" placeholder="Tipo">
                    <input type="text" class="form-control mb-3" name="password" placeholder="Password">
                    <input type="submit" class="btn btn-primary btn-block">
                </form>
            </div>
            <div class="col-md-8">
                <table class="table caption-top">
                    <caption>Lista de usuarios</caption>
                    <thead>
                        <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Password</th>
                        <th></th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           include("conection.php");

                           $sql="SELECT * FROM USUARIOS";
                           $query = mysqli_query($con, $sql); 
                           
                            while($fila = mysqli_fetch_array($query)){
                          
                        ?>
                        <tr>
                            <td><?php echo $fila['nombre'] ?></td>
                            <td><?php echo $fila['email'] ?></td>
                            <td><?php echo $fila['tipo'] ?></td>
                            <td><?php echo $fila['pass'] ?></td>
                            <td><a href="Edit.php?id=<?php echo $fila['id'] ?>" class="btn btn-info" >Editar </a></td>
                            <td><a href="Delete.php?id=<?php echo $fila['id'] ?>" class="btn btn-danger">Eliminar </a></td>
                        </tr>
                        <?php
                          }
                        ?>
                    </tbody>
                </table>
            </div>               
        </div>
    </div>
</body>
</html>