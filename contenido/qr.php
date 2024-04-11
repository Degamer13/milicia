<?php
require"../php/conexion.php";

session_start();
$id = $_SESSION["id"];
$cargo=4;
$consulta = "SELECT * FROM usuarios WHERE id = '$id' OR $cargo='cargo'";
$result = mysqli_query($conexion, $consulta);
$ejecute= $conexion->query($consulta);
$row= $result->fetch_assoc();
if (mysqli_num_rows($result) == 0) {
    echo"<script>
    alert('Por favor debe de iniciar sesión');
    window.location.href='../index.php';
</script>";
    // Si el id del usuario no existe en la base de datos, destruir la sesión
    session_destroy();
      // Cerrar la conexión con la base de datos
      mysqli_close($conexion);
}if (!$result=mysqli_query($conexion, $consulta)) {
	echo("Error description:".mysqli_error($conexion));
}

$filas=mysqli_fetch_array($result, MYSQLI_ASSOC);

$result1 = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($result1) > 0) {

if ($filas["cargo"]==4){
	?><script>
    alert("eL usuario se encuentra deshabilitado");
    window.location.href="../index.php";
</script><?php

  // Si el id del usuario no existe en la base de datos, destruir la sesión
  session_destroy();
  // Cerrar la conexión con la base de datos
  mysqli_close($conexion);
}
}



    ?>
<!DOCTYPE html>
<html lang="en" >
<head>
	<title>Generador de QR</title>

  <link rel="Shortcut Icon" type="image/x-icon" href="../img/logo.png" />
	<link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: #2F4F4F;">
	<div class="container py-3">

		<div class="row">
			<div class="col-md-12"> 

				<div class="row justify-content-center">
					<div class="col-md-10">
						<!-- form user info -->
						<div class="card card-outline-secondary">
							<div class="card-header">
								<h3 class="mb-0"><center>Ficha de Información</center></h3>
							</div>
							<?php
							 require"../php/conexion.php";
                             $id_p=$_GET["id_p"];
                             $consulta= "SELECT * FROM  persona p  LEFT JOIN datos_militar d  ON d.id_mili=p.id_p LEFT JOIN adi_datos a ON d.adi=a.id_a LEFT JOIN region_tabla r ON a.id_adi=r.id_b LEFT JOIN zodi_tabla z ON r.id_region=z.id_c LEFT JOIN datos_salud s ON s.id_salud=p.id_p WHERE id_p='$id_p'";
                            
$ejecute= $conexion->query($consulta);
$extraer= $ejecute->fetch_assoc();

							if (isset($_POST["btnsubmit"])) {
									$nombre1 = $_POST["nombre1"];
									$apellido1 = $_POST["apellido1"];
									$cedula = $_POST["cedula"];
									$genero = $_POST["genero"];
									$estado_civil = $_POST["estado_civil"];
                  $fecha_nacimiento = $_POST["fecha_nacimiento"];
									$grupo_sanguineo = $_POST["grupo_sanguineo"];
									$peso = $_POST["peso"];
									$estatura = $_POST["estatura"];
									$jerarquia = $_POST["jerarquia"];
                  $descripcion = $_POST["descripcion"];
                  $descripcion1 = $_POST["descripcion1"];
                  $descripcion2 = $_POST["descripcion2"];

									/*echo "<pre>";
                                    var_dump($_POST);
                                    echo "</pre>";*/
							}
							?>
                            
							<div class="card-body"  >
                            <form class="row g-3" autocomplete="off"  role="form" action="qr.php?id_p=<?=$extraer['id_p']?>" method="post">
  <div class="col-sm-4">
    <label for="inputEmail4" class="form-label">NOMBRE</label>
    <input type="text"  value="<?php echo $extraer['nombre1'] ?>" name="nombre1" class="form-control" id="inputEmail4">
  </div>
  <div class="col-sm-4">
    <label for="inputPassword4" class="form-label">APELLIDO</label>
    <input type="text"  value="<?php echo $extraer['apellido1'] ?>" name="apellido1" class="form-control" id="inputPassword4">
    
   
 
  </div>
  <div class="col-sm-4">
    <label for="inputPassword4" class="form-label">CEDULA</label>
    <input type="text"   value="<?php echo $extraer['cedula'] ?>" name="cedula" class="form-control" id="inputPassword4">
    
   
 
  </div>
  <div class="col-sm-3">
    <label for="inputPassword4" class="form-label">GENERO</label>
    <input type="text"  value="<?php echo $extraer['genero'] ?>" name="genero" class="form-control" id="inputPassword4">
    
   
 
  </div>
  <div class="col-sm-4">
    <label for="inputPassword4" class="form-label">ESTADO CIVIL</label>
    <input type="text"  value="<?php echo $extraer['estado_civil'] ?>" name="estado_civil" class="form-control" id="inputPassword4">
    
   
 
  </div>
  <div class="col-sm-5">
    <label for="inputPassword4" class="form-label">FECHA DE NACIMIENTO</label>
    <input type="text"  value="<?php echo $extraer['fecha_nacimiento'] ?>" name="fecha_nacimiento" class="form-control" id="inputPassword4">
    
   
 
  </div>
  <div class="col-sm-3">
    <label for="inputPassword4" class="form-label">GRUPO SANGUINEO</label>
    <input type="text"   value="<?php echo $extraer['grupo_sanguineo'] ?>" name="grupo_sanguineo" class="form-control" id="inputPassword4">
    
   
 
  </div>
  <div class="col-sm-5">
    <label for="inputPassword4" class="form-label">PESO</label>
    <input type="text"   value="<?php echo $extraer['peso'] ?>" name="peso" class="form-control" id="inputPassword4">
    
   
 
  </div>
  <div class="col-sm-4">
    <label for="inputPassword4" class="form-label">ESTATURA</label>
    <input type="text"  value="<?php echo $extraer['estatura'] ?>" name="estatura" class="form-control" id="inputPassword4">
    
   
 
  </div>
  <div class="col-sm-3">
    <label for="inputPassword4" class="form-label">JERARQUIA</label>
    <input type="text"  value="<?php echo $extraer['jerarquia'] ?>" name="jerarquia" class="form-control" id="inputPassword4">
    
   
 
  </div>
  <div class="col-sm-3">
    <label for="inputPassword4" class="form-label">ADI</label>
    <input type="text"   value="<?php echo $extraer['descripcion'] ?>" name="descripcion" class="form-control" id="inputPassword4">
    
   
 
  </div>
  <div class="col-sm-3">
    <label for="inputPassword4" class="form-label">REGION</label>
    <input type="text"   value="<?php echo $extraer['descripcion1'] ?>" name="descripcion1" class="form-control" id="inputPassword4">
    
   
 
  </div>
  <div class="col-sm-3">
    <label for="inputPassword4" class="form-label">ZODI</label>
    <input type="text"   value="<?php echo $extraer['descripcion2'] ?>" name="descripcion2" class="form-control" id="inputPassword4">
    
   
 
  </div>

 
  <div class="col-12">
    <input type="submit" class="btn btn-primary" name="btnsubmit" value="Generar QR">
  </div>
</form>
						</div>
								<?php
 									include "../phpqrcode/qrlib.php";
 									$PNG_TEMP_DIR = '../temp/';
 									if (!file_exists($PNG_TEMP_DIR))
									    mkdir($PNG_TEMP_DIR);

									$filename = $PNG_TEMP_DIR . 'test.png';

									if (isset($_POST["btnsubmit"])) {
                  
  
									$codeString = $_POST["nombre1"] . "\n";
									$codeString .= $_POST["apellido1"] . "\n";
									$codeString .= $_POST["cedula"] . "\n";
									$codeString .= $_POST["genero"] . "\n";
									$codeString .= $_POST["estado_civil"] . "\n";;
                  $codeString .= $_POST["fecha_nacimiento"] . "\n";
									$codeString .= $_POST["grupo_sanguineo"] . "\n";
									$codeString .= $_POST["peso"] . "\n";
									$codeString .= $_POST["estatura"] . "\n";
									$codeString .= $_POST["jerarquia"] . "\n";;
                  $codeString .= $_POST["descripcion"] . "\n";
									$codeString .= $_POST["descripcion1"] . "\n";
									$codeString .= $_POST["descripcion2"] ;
								

									$filename = $PNG_TEMP_DIR . 'test' . md5($codeString) . '.png';

									QRcode::png($codeString, $filename);

									echo '<img src="' . $PNG_TEMP_DIR . basename($filename) . '"  width="180px" /><hr/>';
								}

								?>
							</div>
						</div><!-- /form user info -->
					</div>
				</div>

			</div><!--/col-->
		</div><!--/row-->

	</div><!--/container-->

</body>
</html>