<?php
require 'conexion.php';

$id= $_GET['id'];
$clave=$_POST['clave'];
$clave= hash('sha512', $clave);


$query=" UPDATE usuarios SET clave='$clave' WHERE id=$id";

$ejecute=mysqli_query($conexion, $query);
if ($ejecute) {
    ?><script>
    alert("La contraseña a sido actualizada con exito");
window.location="../index.php";
</script><?php
}else{
    echo "malo";
}
