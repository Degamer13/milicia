<?php
require 'conexion.php';

$id_t= $_GET['id_t'];
$tareas=$_POST['tareas'];
$id_tarea= $_POST['id_tarea'];




$query=" UPDATE tarea SET  tareas='$tareas', id_tarea='$id_tarea' WHERE id_t=$id_t";

$ejecute=mysqli_query($conexion, $query);
if ($ejecute) {
	?><script>
	alert("Los datos han sido actualizados con exito");
	window.location.href="../contenido/registros_militares1.php";
</script><?php
}else{
	echo "malo";
}
?>