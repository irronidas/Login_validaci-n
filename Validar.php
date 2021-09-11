<?php
   if (isset($_POST['btn'])){
    error_reporting(0);
    $usuario=$_POST['Nombre'];
    $Password=$_POST['contraseña'];
    
    session_start();
    $_SESSION['usuario']=$usuario;
   
    
    include ("conection.php");

    $query="SELECT nombre, pass, tipo FROM USUARIOS WHERE nombre='$usuario' and pass= md5('$Password')";
    $resul = mysqli_query($con, $query);

    $filas=mysqli_num_rows($resul);

    $filas1=mysqli_fetch_assoc($resul);
    
    $tipo = $filas1['tipo'];
      
    if($filas>0 && $tipo == 1){
      header("location:Admin.php");
    }elseif ($filas>0 && $tipo == 2){
      header("location:Operador.php");
    }else{
      echo "* Error de autenticación";
    }
    mysqli_free_result($resul);
    mysqli_close($con);

    
 
    
      $patron2 = "/^[a-z]+$/i";
  
      if (empty($usuario)){
        echo "<p class='error'>* Falta Nombre </p>";
      } else { 
        if(strlen($usuario) > 15){
          echo "<p class='error'>* El Nombre es demasiado largo </p>";
        }else { 
          if(preg_match($patron2, $usuario)){
              
          }else{
              echo "<p class='error'>* Nombre no debe poseer números o carácter </p>";
          }
      }
  }
  
      if (empty($Password)){
          echo "<p class='error'>* Falta Password</p>";
        } else { 
          if(strlen($Password) > 9){
              echo "<p class='error'>* La Password ingresada es demasiado largo </p>";
          }
  
        }  
      }
    
?>