<?php
    include ("conection.php");

        $id = $_GET['id'];
        $sql= "DELETE FROM usuarios WHERE id = '$id'";
        $resul= mysqli_query($con, $sql);
        
        if (!$resul){
            die("fallo query");
    }
    header("Location: Admin.php");
   
    ?>