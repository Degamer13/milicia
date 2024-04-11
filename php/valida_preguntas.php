<?php
require"conexion.php";
    $id= $_GET['id'];

$respuesta1=$_POST["respuesta1"];
$respuesta2=$_POST["respuesta2"];
$respuesta3= $_POST['respuesta3'];


if (mysqli_connect_errno()) {
	printf("conexion fallida:%s\n", mysqli_connect_errno());
	exit();
}
$consulta="SELECT * FROM preguntas where respuesta1='$respuesta1' and respuesta2='$respuesta2' and respuesta3='$respuesta3'";
if (!$resultado=mysqli_query($conexion, $consulta)) {
	echo("Error description:".mysqli_error($conexion));
}//$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_fetch_array($resultado, MYSQLI_ASSOC);

if ($filas["id_user"]) {

header('location:../contenido/reset_passwor.php?id='.$id);

	
}else{

	 ?><script>
    alert("Una de las repuestas es incorrecta");
    window.location.href="../index.php";
</script><?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);


?>