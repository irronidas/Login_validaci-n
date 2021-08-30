<?php
  if (isset($_POST['btn'])){
    if (empty($nombre)){
      echo "<p class='error'>* Falta Nombre </p>";
    } else { 
      if(strlen($nombre) > 15){
        echo "<p class='error'> El Nombre es demasiado largo </p>";
      }
    }
    if (empty($apellido)){
        echo "<p class='error'>* Falta Edad </p>";
      } else { 
        if(strlen($apellido) > 15){
            echo "<p class='error'> El Apellido es demasiado largo </p>";
        }
      }
    if (empty($cod_tra)){
        echo "<p class='error'>* Falta Código trabajador </p>";
      } else { 
        if(strlen($cod_tra) > 3){
            echo "<p class='error'> EL Código ingresada es demasiado largo </p>";
      } else{
        if(!is_numeric($cod_tra)){
            echo "<p class='error'> EL Código debe ser numerico </p>";
            }
        }

      }  
    }
?>