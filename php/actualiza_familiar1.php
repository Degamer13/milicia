<?php
require'conexion.php';

    $id_f=$_POST['id_f'];
    $parentesco = $_POST['parentesco'];
    $cedula1 = $_POST['cedula1'];
    $nombref = $_POST['nombref'];
    $telefono2 = $_POST['telefono2'];
    $ocupacion= $_POST['ocupacion'];
    $id_familia = $_POST['id_familia'];
   

     
$query=" UPDATE familia SET  parentesco='$parentesco', cedula1='$cedula1', nombref='$nombref', telefono2='$telefono2',
ocupacion='$ocupacion', id_familia='$id_familia' WHERE id_f=$id_f";
 

$ejecut= mysqli_query($conexion, $query);

if($ejecut){
    ?><script>
	alert("Los datos han sido actualizados con exito");
	window.location.href="../contenido/registros_militares1.php";
</script><?php
}

else{
    echo"malo";
}

?>