<?php

include("conection.php");


    $nom = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $tipo = trim($_POST['tipo']);
    $password = trim($_POST['password']);

    if ($nom!=null||$email!=null||$tipo!=null||$password!=null){
    $sql= "INSERT INTO usuarios (nombre, email  , tipo, pass) VALUES ('$nom', '$email', '$tipo', md5('$password'))";
    $resul= mysqli_query($con, $sql);
    
    header("Location:Admin.php");
        }else{
            echo "<script>alert('No se ha procesado');</script>";
            
        }
 


?>