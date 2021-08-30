<?php
  if (isset($_POST['btn'])){
    
    $patron2 = "/^[a-z]+$/i";

    if (empty($nombre)){
      echo "<p class='error'>* Falta Nombre </p>";
    } else { 
      if(strlen($nombre) > 15){
        echo "<p class='error'>* El Nombre es demasiado largo </p>";
      }else { 
        if(preg_match($patron2, $nombre)){
            
        }else{
            echo "<p class='error'>* Nombre no debe poseer números o carácter </p>";
        }
    }
}


    if (empty($apellido)){
        echo "<p class='error'>* Falta Edad </p>";
      } else { 
        if(strlen($apellido) > 15){
            echo "<p class='error'>* El Apellido es demasiado largo </p>";
        } else { 
        if(preg_match($patron2, $apellido)){
            
        }else{
            echo "<p class='error'>* Apellido no debe poseer números o carácter </p>";
        }
      }
    }
      


    if (empty($cod_tra)){
        echo "<p class='error'>* Falta Código trabajador </p>";
      } else { 
        if(strlen($cod_tra) > 3){
            echo "<p class='error'>* El Código ingresada es demasiado largo </p>";
      } else{
        if(!is_numeric($cod_tra)){
            echo "<p class='error'> El Código debe ser númerico </p>";
            }
        }

      }  
    }
?>