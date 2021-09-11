<?php
    include("conection.php");
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $tipo = $_POST['tipo'];
    $pass = $_POST['password'];
    $id = $_POST['id'];


    $sql = "UPDATE usuarios SET  nombre='$nombre', email= '$email', tipo='$tipo', pass = md5('$pass') WHERE id = '$id'";
    $resultado = mysqli_query($con, $sql);

    if ($resultado) {

        header("Location: Admin.php");
    }


?>