<?php

require"conexion.php";

$id_s=$_GET['id_s'];
$dental=$_POST['dental'];
$alergico=$_POST['alergico'];
$tatuaje=$_POST['tatuaje'];
$enfermedad=$_POST['enfermedad'];
$cantidad_hijos=$_POST['cantidad_hijos'];
$cantidad_hijas=$_POST['cantidad_hijas'];
$cantidad_hermanos=$_POST['cantidad_hermanos'];
$cantidad_hermanas=$_POST['cantidad_hermanas'];
$vivienda_propia=$_POST['vivienda_propia'];
$condicion2=$_POST['condicion2'];
$vehiculo=$_POST['vehiculo'];
$botas=$_POST['botas'];
$cara=$_POST['cara'];
$cabello=$_POST['cabello'];
$color_cabello=$_POST['color_cabello'];
$peso=$_POST['peso'];
$estatura=$_POST['estatura'];
$grupo_sanguineo=$_POST['grupo_sanguineo'];
$color_ojos=$_POST['color_ojos'];
$labios=$_POST['labios'];
$id_salud=$_POST['id_salud'];

$query=" UPDATE datos_salud SET  dental='$dental', alergico='$alergico', tatuaje='$tatuaje', enfermedad='$enfermedad',
cantidad_hijos='$cantidad_hijos', cantidad_hijas='$cantidad_hijas', cantidad_hermanos='$cantidad_hermanos',
cantidad_hermanas='$cantidad_hermanas', vivienda_propia='$vivienda_propia', condicion2='$condicion2', vehiculo='$vehiculo',
botas='$botas', cara='$cara', cabello='$cabello', color_cabello='$color_cabello', peso='$peso' , estatura='$estatura',
grupo_sanguineo='$grupo_sanguineo', color_ojos='$color_ojos' , labios='$labios' , id_salud='$id_salud'  WHERE id_s=$id_s";
 

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