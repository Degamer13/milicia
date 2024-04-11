<?php

require "conexion.php";

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

$verifica_milicia=mysqli_query($conexion, "SELECT * FROM cursos WHERE id_cursos='$id_cursos'");
      if (mysqli_num_rows($verifica_milicia)>0) {
        echo '
      <script>alert("La cedula ingresado ya se encuentra registrada intente con otra");
      
      window.location="../contenido/cursos1.php";
      </script>;
      
        ';
        exit();
      }

$query="INSERT INTO cursos (lectura_mapa, tiro_combate, zu_23, iglas, sanidad, btr_80, francotirador, guia_aereo, explosivista, paracaidismo, zapador, mar, cursos_no_militares, otros_cursos_militares, otras_habilidades, id_cursos) 
VALUES ('$lectura_mapa', '$tiro_combate', '$zu_23', '$iglas', '$sanidad', '$btr_80', '$francotirador', '$guia_aereo', '$explosivista', '$paracaidismo', '$zapador', '$mar', '$cursos_no_militares', '$otros_cursos_militares', '$otras_habilidades', '$id_cursos' )";

$ejecut= mysqli_query($conexion, $query);

if($ejecut){
    ?><script>
	alert("Los datos han sido registrados con exito");
window.location="../contenido/cursos1.php";
</script><?php
}

else{
    echo"malo";
}

?>