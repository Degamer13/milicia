<?php
require'conexion.php';


    $parentesco = $_POST['parentesco'];
    $cedula1 = $_POST['cedula1'];
    $nombref = $_POST['nombref'];
    $telefono2 = $_POST['telefono2'];
    $ocupacion= $_POST['ocupacion'];
    $id_familia = $_POST['id_familia'];
   

         $query = "INSERT INTO familia (parentesco, cedula1, nombref, telefono2, ocupacion, id_familia) VALUES ('$parentesco', '$cedula1','$nombref', '$telefono2','$ocupacion', '$id_familia')";
       
         $ejecute=mysqli_query($conexion, $query);
if ($ejecute) {

	
	

  ?><script>
	alert("Los datos han sido registrados con exito");
window.location="../contenido/registro_familiar.php";
</script><?php
}else{
	echo "malo";
}


?>