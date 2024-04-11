<?php

require'conexion.php';


$pregunta1=$_POST['pregunta1'];
$pregunta2=$_POST['pregunta2'];
$pregunta3=$_POST['pregunta3'];
$respuesta1=$_POST['respuesta1'];
$respuesta2=$_POST['respuesta2'];
$respuesta3=$_POST['respuesta3'];
$id_user=$_POST['id_user'];


$verifica_usuario=mysqli_query($conexion, "SELECT * FROM preguntas WHERE id_user='$id_user'");
if (mysqli_num_rows($verifica_usuario)>0) {
	echo '
<script>alert("Usted ya posse un registro de preguntas de seguridad");

window.location="../contenido/perfil2.php";
</script>;

	';
	exit();
}


$query=" INSERT INTO preguntas (pregunta1, pregunta2, pregunta3, respuesta1, respuesta2, respuesta3, id_user)  VALUES('$pregunta1', '$pregunta2','$pregunta3','$respuesta1','$respuesta2', '$respuesta3', '$id_user')";

$ejecute=mysqli_query($conexion, $query);
if ($ejecute) {
	?><script>
	alert("Las preguntas de seguridad fueron registradas con exito");
	window.location.href="../contenido/perfil2.php";
</script><?php
}else{
	echo "malo";
}