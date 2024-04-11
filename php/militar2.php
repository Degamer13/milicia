<?php

require"conexion.php";

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

$verifica_milicia=mysqli_query($conexion, "SELECT * FROM datos_militar WHERE id_mili='$id_mili'");
      if (mysqli_num_rows($verifica_milicia)>0) {
        echo '
      <script>alert("La cedula ingresado ya se encuentra registrada intente con otra");
      
      window.location="../contenido/registro_militar2.php";
      </script>;
      
        ';
        exit();
      }
$query="INSERT INTO datos_militar(adi, region, zodi, jerarquia, instruccion, profesion, oficio, mision, condicion, militar_profesional,
componente, grado, ano_graduacion, ano_retiro, causa_retiro, servicio_militar, contingente, ano_licenciamiento,
talla, calzado, gorra, unif_caqui, unif_zamorano, tiempo_milicia, tiempo_grado, ano_ultasce, id_mili) 
VALUES ('$adi', '$region', '$zodi', '$jerarquia', '$instruccion', '$profesion', '$oficio', '$mision', '$condicion', '$militar_profesional',
'$componente', '$grado', '$ano_graduacion', '$ano_retiro', '$causa_retiro', '$servicio_militar', '$contingente', '$ano_licenciamiento',
'$talla', '$calzado', '$gorra', '$unif_caqui', '$unif_zamorano', '$tiempo_milicia', '$tiempo_grado', '
$ano_ultasce', '$id_mili')";

$con=mysqli_query($conexion, $query);

if($con){

    ?><script>
	alert("Los datos han sido registrados con exito");
window.location="../contenido/registro_militar2.php";
</script><?php
}else{
    echo"malo";
}
?>