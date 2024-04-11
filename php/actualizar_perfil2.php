<?php
require 'conexion.php';


$id= $_GET['id'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];

$usuario=$_POST['usuario'];

$clave=$_POST['clave'];
$clave= hash('sha512', $clave);

$cargo=$_POST['cargo'];

$fecha=$_POST['fecha'];




$query=" UPDATE usuarios SET  nombre='$nombre', correo='$correo', usuario='$usuario', clave='$clave', cargo='$cargo', fecha='$fecha' WHERE id=$id";

$ejecute=mysqli_query($conexion, $query);
if ($ejecute) {
	?><script>
	alert("Los datos han sido actualizados con exito");
	window.location.href="../contenido/perfil2.php";
</script><?php
}else{
	echo "malo";
}
?>