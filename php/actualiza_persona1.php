<?php
require'conexion.php';

$id_p = $_GET['id_p'];
    $fecha_registro = $_POST['fecha_registro'];
    $cedula = $_POST['cedula'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];
    $genero = $_POST['genero'];
    $telefono = $_POST['telefono'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $edad = $_POST['edad'];
    $estado_civil = $_POST['estado_civil'];
     $carnet_patria = $_POST['carnet_patria'];
     $seriall = $_POST['seriall'];
     $codigo = $_POST['codigo'];
      $imagen= $_FILES['imagen']['name'];
      $temp  = $_FILES['imagen']['tmp_name'];
      $correo=$_POST['correo'];
      $religion=$_POST['religion'];
      $redes_sociales=$_POST['redes_sociales'];
      $sector= $_POST['sector'];
      $direccion=$_POST['direccion'];
     $unidad=$_POST['unidad'];
      $municipio=$_POST['municipio'];
      $parroquia=$_POST['parroquia'];
      $apdi=$_POST['apdi'];
      $bpdi=$_POST['bpdi'];
      $updi=$_POST['updi'];  
      $cuenta=$_POST['cuenta'];
      $numero_cuenta=$_POST['numero_cuenta'];
      $empresa=$_POST['empresa'];
      $direccion1=$_POST['direccion1'];
      $telefono1=$_POST['telefono1'];
      $cargo1=$_POST['cargo1'];

      $query=" UPDATE persona SET  fecha_registro='$fecha_registro', cedula='$cedula', apellido1='$apellido1', apellido2='$apellido2',
      nombre1='$nombre1', nombre2='$nombre2', genero='$genero', telefono='$telefono', fecha_nacimiento='$fecha_nacimiento',
      edad='$edad', estado_civil='$estado_civil', carnet_patria='$carnet_patria', seriall='$seriall', codigo='$codigo', imagen='$imagen',
      correo='$correo', religion='$religion', redes_sociales='$redes_sociales', sector='$sector', direccion='$direccion', unidad='$unidad',
      municipio='$municipio', parroquia='$parroquia', apdi='$apdi', bpdi='$bpdi', updi='$updi', cuenta='$cuenta', numero_cuenta='$numero_cuenta', empresa='$empresa',
      direccion1='$direccion1', telefono1='$telefono1', cargo1='$cargo1' WHERE id_p=$id_p";
       
       $ejecute=mysqli_query($conexion, $query);
if ($ejecute) {
  move_uploaded_file($temp,'imagenes/'.$imagen); 
	
	

  ?><script>
	   alert("Los datos han sido actualizados con exito");
          window.location.href="../contenido/registros_militares1.php";
</script><?php
}else{
	echo "malo";
}
     
      ?>
?>