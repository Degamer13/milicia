<?php

require"conexion.php";



$tareas=$_POST['tareas'];
$id_tarea=$_POST['id_tarea'];
$verifica_milicia=mysqli_query($conexion, "SELECT * FROM tarea WHERE id_tarea='$id_tarea'");
      if (mysqli_num_rows($verifica_milicia)>0) {
        echo '
      <script>alert("La cedula ingresado ya se encuentra registrada intente con otra");
      
      window.location="../contenido/registro_tarea1.php";
      </script>;
      
        ';
        exit();
      }


$query= "INSERT INTO tarea (tareas, id_tarea) VALUES ('$tareas', '$id_tarea')";

$con= mysqli_query($conexion, $query);

if($con){
    ?><script>
	alert("Los datos han sido registrados con exito");
window.location="../contenido/registro_tarea1.php";
</script><?php
}
else{
    echo"malo";
}


?>