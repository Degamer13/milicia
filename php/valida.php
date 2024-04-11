<?php
require"conexion.php";
$usuario=$_POST["usuario"];
$clave=$_POST["clave"];
$clave= hash('sha512', $clave);

session_start();


if (mysqli_connect_errno()) {
	printf("conexion fallida:%s\n", mysqli_connect_errno());
	exit();
}
$consulta="SELECT * FROM usuarios where usuario='$usuario' and clave='$clave'";

if (!$result=mysqli_query($conexion, $consulta)) {
	echo("Error description:".mysqli_error($conexion));
}//$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_fetch_array($result, MYSQLI_ASSOC);

$result = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($result) > 0) {
	// Usuario y contraseña válidos

	

if ($filas["cargo"]==1) {
	$row = mysqli_fetch_assoc($result);
	$_SESSION["id"] = $row["id"];
	header('location:../contenido/home.php');
	
}

if ($filas["cargo"]==2){
	$row = mysqli_fetch_assoc($result);
	$_SESSION["id"] = $row["id"];
	header('location:../contenido/home1.php');
	
}

if ($filas["cargo"]==3){
	$row = mysqli_fetch_assoc($result);
	$_SESSION["id"] = $row["id"];
	//header('location:/proyecto/home1.php');
	
	header('location:../contenido/home2.php');
}if ($filas["cargo"]==4){
	?><script>
    alert("eL usuario se encuentra deshabilitado");
    window.location.href="../index.php";
</script><?php

}
}else{

	 ?><script>
    alert("El usuario o la contraseña es incorrecto");
    window.location.href="../index.php";
</script><?php

}

mysqli_close($conexion);


?>