<?php
	require'conexion.php';


$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$correo=$_POST['correo'];
$clave= $_POST['clave'];
$clave= hash('sha512', $clave);
$cargo=$_POST['cargo'];

$fecha=date("y-m-d");


$verifica_usuario=mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
if (mysqli_num_rows($verifica_usuario)>0) {
	echo '
<script>alert("El usuario ingresado ya esta registrado intente con otro");

window.location="../contenido/usuario.php";
</script>;

	';
	exit();
}
$verifica_correo=mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
if (mysqli_num_rows($verifica_correo)>0) {
	echo '
<script>alert("El correo ingresado ya esta registrado intente con otro");

window.location="../contenido/usuario.php";
</script>;

	';
	exit();
}

$query=" INSERT INTO usuarios (nombre, usuario, correo, clave, cargo, fecha)  VALUES('$nombre', '$usuario','$correo','$clave', '$cargo', '$fecha')";

$ejecute=mysqli_query($conexion, $query);
if ($ejecute) {
	?><script>
	alert("Los datos han sido registrados con exito");
window.location="../contenido/usuario.php";
</script><?php
}else{
	echo "malo";
}


?>