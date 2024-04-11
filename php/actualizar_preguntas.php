<?php

require'conexion.php';

$id_r=$_GET['id_r'];
$pregunta1=$_POST['pregunta1'];
$pregunta2=$_POST['pregunta2'];
$pregunta3=$_POST['pregunta3'];
$respuesta1=$_POST['respuesta1'];
$respuesta2=$_POST['respuesta2'];
$respuesta3=$_POST['respuesta3'];
$id_user=$_POST['id_user'];


$query=" UPDATE preguntas SET pregunta1='$pregunta1', pregunta2='$pregunta2', pregunta3='$pregunta3', respuesta1='$respuesta1', respuesta2='$respuesta2', respuesta3='$respuesta3', id_user='$id_user' WHERE id_r=$id_r ";

$ejecute=mysqli_query($conexion, $query);
if ($ejecute) {
	?><script>
	alert("Las preguntas de seguridad fueron actualizadas con exito");
	window.location.href="../contenido/perfil.php";
</script><?php
}else{
	echo "malo";
}