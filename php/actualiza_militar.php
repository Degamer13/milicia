<?php

require"conexion.php";
$id_m=$_GET['id_m'];
$adi=$_POST["adi"];
$region=$_POST["region"];
$zodi=$_POST["zodi"];
$jerarquia=$_POST["jerarquia"];
$instruccion=$_POST["instruccion"];
$profesion=$_POST["profesion"];
$oficio=$_POST["oficio"];
$mision=$_POST["mision"];
$condicion=$_POST["condicion"];
$militar_profesional=$_POST["militar_profesional"];
$componente=$_POST["componente"];
$grado=$_POST["grado"];
$ano_graduacion=$_POST["ano_graduacion"];
$ano_retiro=$_POST["ano_retiro"];
$causa_retiro=$_POST["causa_retiro"];
$servicio_militar=$_POST["servicio_militar"];
$contingente=$_POST["contingente"];
$ano_licenciamiento=$_POST["ano_licenciamiento"];
$talla=$_POST["talla"];
$calzado=$_POST["calzado"];
$gorra=$_POST["gorra"];
$unif_caqui=$_POST["unif_caqui"];
$unif_zamorano=$_POST["unif_zamorano"];
$tiempo_milicia=$_POST["tiempo_milicia"];
$tiempo_grado=$_POST["tiempo_grado"];
$ano_ultasce=$_POST["ano_ultasce"];
$id_mili=$_POST["id_mili"];

$query=" UPDATE datos_militar SET  adi='$adi', region='$region', zodi='$zodi', jerarquia='$jerarquia',
instruccion='$instruccion', profesion='$profesion', oficio='$oficio',
mision='$mision', condicion='$condicion', militar_profesional='$militar_profesional', componente='$componente',
grado='$grado', ano_graduacion='$ano_graduacion', ano_retiro='$ano_retiro', causa_retiro='$causa_retiro',
servicio_militar='$servicio_militar', contingente='$contingente', ano_licenciamiento='$ano_licenciamiento',
talla='$talla', calzado='$calzado', gorra='$gorra', unif_caqui='$unif_caqui', unif_zamorano='$unif_zamorano', tiempo_milicia='$tiempo_milicia',
tiempo_grado='$tiempo_grado', ano_ultasce='$ano_ultasce', id_mili='$id_mili' WHERE id_m=$id_m";
 

$ejecut= mysqli_query($conexion, $query);

if($ejecut){
    ?><script>
	alert("Los datos han sido actualizados con exito");
	window.location.href="../contenido/registros_militares.php";
</script><?php
}

else{
    echo"malo";
}

?>