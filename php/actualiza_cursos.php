<?php

require "conexion.php";

$id_cu= $_GET['id_cu'];
$lectura_mapa=$_POST["lectura_mapa"];
$tiro_combate=$_POST["tiro_combate"];
$zu_23=$_POST["zu_23"];
$iglas=$_POST["iglas"];
$sanidad=$_POST["sanidad"];
$btr_80=$_POST["btr_80"];
$francotirador=$_POST["francotirador"];
$guia_aereo=$_POST["guia_aereo"];
$explosivista=$_POST["explosivista"];
$paracaidismo=$_POST["paracaidismo"];
$zapador=$_POST["zapador"];
$mar=$_POST["mar"];
$cursos_no_militares=$_POST["cursos_no_militares"];
$otros_cursos_militares=$_POST["otros_cursos_militares"];
$otras_habilidades=$_POST["otras_habilidades"];
$id_cursos=$_POST["id_cursos"];


$query=" UPDATE cursos SET  lectura_mapa='$lectura_mapa', tiro_combate='$tiro_combate', zu_23='$zu_23', iglas='$iglas',
sanidad='$sanidad', btr_80='$btr_80', francotirador='$francotirador',
guia_aereo='$guia_aereo', explosivista='$explosivista', paracaidismo='$paracaidismo', zapador='$zapador',
mar='$mar', cursos_no_militares='$cursos_no_militares', otros_cursos_militares='$otros_cursos_militares', otras_habilidades='$otras_habilidades', id_cursos='$id_cursos' WHERE id_cu=$id_cu";
 

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