<?php

require "conexion.php";

$id_f=$_GET['id_f'];
$queto= "DELETE FROM familia WHERE id_f = $id_f";
$result = mysqli_query($conexion, $queto);

$result=mysqli_query($conexion, $queto);
if ($result) {
	?><script>
	alert("Familiar Eliminado");
	window.location.href="../contenido/registros_militares1.php";
</script><?php
}else{
	echo "malo";
}
?>