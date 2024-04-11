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
    <?php

ob_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        table{
	background-color: gray;
	text-align: center;
	border-collapse: collapse;
	
}

th, td{
	padding: 3px;
}

thead{
	background-color: rgba(0, 0, 0, 0.8);
	
	color: white;
}

tr:nth-child(even){
	background-color: #ddd;
}

tr:hover td{
	background-color: white;
	color: black;
}

    </style>
</head>
<body>

<center><h3>LISTADO POR GENERO FEMENINO</h3></center>

                                <table class="table text-center">
                                     <thead class="thead-dark">
                                        <tr>
                                        <th style="text-align: center;">NOMBRE Y APELLIDO</th>
                                            <th style="text-align: center;">CEDULA</th>
                                            <th style="text-align: center;">GENERO</th>
                                            <th style="text-align: center;">CORREO ELECTRONICO</th>
                                            <th style="text-align: center;">JERARQUIA</th>
                                            <th style="text-align: center;">REGION</th>
                                            <th style="text-align: center;">ADI</th>
                                            <th style="text-align: center;">ZODI</th>
                                          
                                           
                                        </tr>
                                    </thead>
                                   <img src="" alt="">
                                    
                                        <?php
                                        require"../php/conexion.php";
                                        $queto= "SELECT * FROM persona p  LEFT JOIN datos_militar d  ON d.id_mili=p.id_p LEFT JOIN adi_datos a ON d.adi=a.id_a LEFT JOIN region_tabla r ON a.id_adi=r.id_b LEFT JOIN zodi_tabla z ON r.id_region=z.id_c WHERE genero='MUJER'";
                                        $result= mysqli_query($conexion, $queto);
                                       while($fila = mysqli_fetch_array($result)) { ?>
                                            <tr>
                                            <td style="text-align: center;"><?php echo $fila['nombre1']." ".$fila['apellido1'] ?></td>
   <td style="text-align: center;"><?php echo $fila['cedula'] ?></td>
   <td style="text-align: center;"><?php echo $fila['genero'] ?></td>
     <td style="text-align: center;"><?php echo $fila['correo'] ?></td>
    <td style="text-align: center;"><?php echo $fila['jerarquia'] ?></td>
    <td style="text-align: center;"><?php echo $fila['descripcion1'] ?></td>
    <td style="text-align: center;"><?php echo $fila['descripcion'] ?></td>
    <td style="text-align: center;"><?php echo $fila['descripcion2'] ?></td>
    
                                            
                                            </tr>
                                        
                                            <?php }?>


                                    
                                </table>
                           
                                
</body>
</html>
<?php

$html=ob_get_clean();
//echo $html;
require"../dompdf/autoload.inc.php";

use Dompdf\Dompdf;
$dompdf= new Dompdf();
$options= $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);
$dompdf->loadHtml($html);
//$dompdf->setPaper('letter');
$dompdf->setPaper('letter', 'landscape');

$dompdf->render();
$dompdf->stream("archivo_.pdf", array("Attachment"=>false));



    ?>