<?php

require "conexion.php";

$id_p=$_GET['id_p'];
$queto= "DELETE FROM persona WHERE id_p = $id_p";
$result = mysqli_query($conexion, $queto);

$result=mysqli_query($conexion, $queto);
if ($result) {
	?><script>
	alert("Registro Eliminado");
	window.location.href="../contenido/registros_militares.php";
</script><?php
}else{
	echo "malo";
}
?>