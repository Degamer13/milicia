<?php

require"conexion.php";

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

$verifica_milicia=mysqli_query($conexion, "SELECT * FROM datos_salud WHERE id_salud='$id_salud'");
      if (mysqli_num_rows($verifica_milicia)>0) {
        echo '
      <script>alert("La cedula ingresado ya se encuentra registrada intente con otra");
      
      window.location="../contenido/registro_salud.php";
      </script>;
      
        ';
        exit();
      }



$query="INSERT INTO datos_salud (dental, alergico, tatuaje, enfermedad, cantidad_hijos, cantidad_hijas, cantidad_hermanos,
cantidad_hermanas, vivienda_propia, condicion2, vehiculo, botas, cara, cabello, color_cabello, peso,
estatura, grupo_sanguineo, color_ojos, labios, id_salud) VALUES ('$dental', '$alergico', '$tatuaje', '$enfermedad', '$cantidad_hijos', '$cantidad_hijas', '$cantidad_hermanos',
'$cantidad_hermanas', '$vivienda_propia', '$condicion2', '$vehiculo', '$botas', '$cara', '$cabello', '$color_cabello', '$peso',
'$estatura', '$grupo_sanguineo', '$color_ojos', '$labios', '$id_salud')";

$con= mysqli_query($conexion, $query);

if($con){
    ?><script>
	alert("Los datos han sido registrados con exito");
window.location="../contenido/registro_salud.php";
</script><?php
}else{
    echo"malo";
}

?>