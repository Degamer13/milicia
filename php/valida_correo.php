<?php
require"conexion.php";

$correo=$_POST["correo"];

if (mysqli_connect_errno()) {
	printf("conexion fallida:%s\n", mysqli_connect_errno());
	exit();
}
$consulta="SELECT * FROM usuarios where correo='$correo'";


if (!$result=mysqli_query($conexion, $consulta)) {
	echo("Error description:".mysqli_error($conexion));
}//$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_fetch_array($result, MYSQLI_ASSOC);

$result = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($result) > 0) {
	// Usuario y contraseña válidos

	

if ($result=mysqli_query($conexion, $consulta)) {
	$dato = array();	
	while ($dato[] = mysqli_fetch_assoc($result));
	echo("Error description:".mysqli_error($conexion));


header('location:../contenido/preguntas_seguridad.php?id=' .$dato[0]['id']);
	
}
}else{

	 ?><script>
    alert("El correo electronico no se encuentra registrado");
    window.location.href="../index.php";
</script><?php

}
mysqli_free_result($result);
mysqli_close($conexion);


?>