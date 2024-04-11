<?php
require'conexion.php';


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
      $verifica_cedula=mysqli_query($conexion, "SELECT * FROM persona WHERE cedula='$cedula'");
      if (mysqli_num_rows($verifica_cedula)>0) {
        echo '
      <script>alert("La cedula ingresado ya se encuentra registrada intente con otra");
      
      window.location="../contenido/registrar_persona2.php";
      </script>;
      
        ';
        exit();
      }


$verifica_correo=mysqli_query($conexion, "SELECT * FROM persona WHERE correo='$correo'");
if (mysqli_num_rows($verifica_correo)>0) {
	echo '
<script>alert("El correo ingresado ya esta registrado intente con otro");

window.location="../contenido/registrar_persona2.php";
</script>;

	';
	exit();
}

         $query = "INSERT INTO persona (fecha_registro, cedula, apellido1, apellido2, nombre1, nombre2, genero, telefono, fecha_nacimiento, edad, estado_civil, carnet_patria, seriall, codigo, imagen, correo, redes_sociales, religion, sector, direccion, unidad, municipio, parroquia, apdi, bpdi, updi, cuenta, numero_cuenta, empresa, direccion1, telefono1, cargo1) VALUES ('$fecha_registro','$cedula', '$apellido1','$apellido2', '$nombre1','$nombre2', '$genero','$telefono', '$fecha_nacimiento', '$edad','$estado_civil', '$carnet_patria','$seriall', '$codigo', '$imagen', '$correo', '$redes_sociales','$religion','$sector', '$direccion', '$unidad',  '$municipio',  '$parroquia','$apdi','$bpdi', '$updi', '$cuenta', '$numero_cuenta', '$empresa', '$direccion1', '$telefono1', '$cargo1')";
       
         $ejecute=mysqli_query($conexion, $query);
if ($ejecute) {
  move_uploaded_file($temp,'imagenes/'.$imagen); 
	
	

  ?><script>
	alert("Los datos han sido registrados con exito");
window.location="../contenido/registrar_persona2.php";
</script><?php
}else{
	echo "malo";
}


?>