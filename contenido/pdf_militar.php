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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        .uno{
            text-align: left;
            
        }
        
        h4{
           
            text-align: center;
        }
        .logo{
            position: absolute;
          
           
            
        }
        

        th{
            background-color: rgb(204, 198, 198);
        }
        .imagen{
            position: absolute;
            
            margin-left: 86%;
            
        }
       
    </style>
</head>
<body>
<?php
require"../php/conexion.php";
$id_p =$_GET['id_p'];

$queto= "SELECT * FROM  persona p  LEFT JOIN datos_militar d  ON d.id_mili=p.id_p LEFT JOIN adi_datos a ON d.adi=a.id_a LEFT JOIN region_tabla r ON a.id_adi=r.id_b LEFT JOIN zodi_tabla z ON r.id_region=z.id_c LEFT JOIN cursos c ON c.id_cursos=p.id_p LEFT JOIN datos_salud s ON s.id_salud=p.id_p LEFT JOIN tarea t ON t.id_tarea=p.id_p where id_p=$id_p";
$result= mysqli_query($conexion, $queto);

while($fila = mysqli_fetch_array($result)) { ?>
<img class="logo"  src="http://<?php echo $_SERVER['HTTP_HOST'];?>./milicia/img/logo.png" width='105' >
<img class="imagen"  src="http://<?php echo $_SERVER['HTTP_HOST'];?>./milicia/php/imagenes/<?php echo $fila['imagen'];?>" width='105' >
    <h4>REPUBLICA BOLIVARIANA DE VENEZUELA<br>
MINISTERIO DEL PODER POPULAR PARA LA DEFENSA<br>
COMANDO GENERAL DE LA MILICIA BOLIVARIANA<br>
COMANDO DE LA REDI DE MILICIA <?php echo  $fila['descripcion1'] ?><br>
COMANDO DE LA ZODI DE MILICIA <?php echo  $fila['descripcion2'] ?><br>
FICHA DE REGISTRO DEL MILICIANO PIE DE LUCHA (LAM)<br></h4>

<center>

    <h5 class="uno">FECHA DE ELABORACIÓN: <?php echo  date('d/m/Y') ?> </h5>
    
    <table border="1">
        <thead >
            <tr>
                <th colspan="6">A.- IDENTIFICACIÓN(L)</th>  
            </tr>
        </thead>
        <tr>
            <td >GRADO/JERARQUIA: <?php echo  $fila['jerarquia'] ?></td>
            <td colspan="5">APELLIDOS Y NOMBRES: <?php echo $fila['apellido1']." ".$fila['apellido2']." ".$fila['nombre1']." ".$fila['nombre2'] ?></td>
        </tr>
        <tr>
            <td >CED.IDENT: <?php echo  $fila['cedula'] ?></td>
            <td colspan="2">SEXO: <?php echo  $fila['genero'] ?></td>
            <td colspan="3">ESTADO CIVIL: <?php echo  $fila['estado_civil'] ?></td>
        </tr>
        <tr>
            <td colspan="3">GRUPO SANGUÍNEO: <?php echo  $fila['grupo_sanguineo'] ?></td>
            
            <td colspan="3">FECHA DE NAC: <?php echo  $fila['fecha_nacimiento'] ?></td>
        </tr>
        <tr>
            <td>DIRECCIÓN DOMICILIO: <?php echo  $fila['direccion'] ?></td>
            <td colspan="2">N°CELULAR: <?php echo  $fila['telefono'] ?></td>
            <td colspan="3">MUNICIPIO: <?php echo  $fila['municipio'] ?></td>
        </tr>
       
        <tr>
            <td colspan="2">PARROQUIA:<?php echo  $fila['parroquia'] ?></td>
            <td colspan="4">COMUNIDAD: <?php echo  $fila['sector'] ?></td>
            
        </tr>
        <tr>
            <td colspan="2">ADI:<?php echo  $fila['descripcion'] ?></td>
            <td colspan="4">APDI: <?php echo  $fila['apdi'] ?></td>
            
        </tr>
        <tr>
            <td colspan="2">BPDI: <?php echo  $fila['bpdi'] ?></td>
            <td colspan="4">UPDI: <?php echo  $fila['updi'] ?></td>  
        </tr>
        <tr>
            <td  rowspan="2">DATOS FISONOMICOS:</td>
            <td >ESTATURA: <?php echo  $fila['estatura'] ?></td>
            <td >CARA: <?php echo  $fila['cara'] ?></td>
            <td >CABELLO: <?php echo  $fila['cabello'] ?></td>
            <td colspan="2">COLOR DE CABELLO: <?php echo  $fila['color_cabello'] ?></td>
        </tr>
        <tr>
            <td>PESO: <?php echo  $fila['peso'] ?></td>
            <td >TIPO DE SANGRE: <?php echo  $fila['grupo_sanguineo'] ?></td>
            <td >COLOR DE OJOS: <?php echo  $fila['color_ojos'] ?></td>
            <td colspan="2" >LABIOS: <?php echo  $fila['labios'] ?></td>

        </tr>
        <tr>
            <td>DATOS MEDICOS:</td>
            <td colspan="5">ENFERMEDAD: <?php echo  $fila['enfermedad'] ?></td>
        </tr>
        <tr>
            <td>TALLA DE UNIFORMES:</td>
            <td >CAMISA:<?php echo  $fila['talla'] ?></td>
            
            <td >CALZADO: <?php echo  $fila['calzado'] ?></td>
            <td colspan="3">GORRA: <?php echo  $fila['gorra'] ?></td>
        </tr>
        <tr>
            <td colspan="6">CUENTA BANCARIA: <?php echo  $fila['numero_cuenta'] ?></td>
            
            
        </tr>
    </table>
    


    <br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>

<table border='1'>     
<thead >
            <tr>
                <th colspan="18">B.- COMPETENCIAS Y HABILIDADES(A)</th>  
                
            </tr>
        </thead>
        <tr>
            <td colspan="3">GRADO DE INSTRUCCIÓN:  <?php echo  $fila['instruccion'] ?></td>
            <td colspan="3">PROFESION:  <?php echo  $fila['profesion'] ?></td>
            <td colspan="12">OFICIO:  <?php echo  $fila['oficio'] ?></td>
            
        </tr>
        <tr>
            <td colspan="3">CURSOS NO MILITARES:  <?php echo  $fila['cursos_no_militares'] ?></td>
            <td colspan="15">OTRAS HABILIDADES:  <?php echo  $fila['otras_habilidades'] ?></td>
            
        </tr>
        <tr>
            <td >SERVICIO MILITAR:  <?php echo  $fila['servicio_militar'] ?></td>
            <td colspan="2">CONTINGENTE:  <?php echo  $fila['contingente'] ?></td>
            <td colspan="4">JERARQUIA:  <?php echo  $fila['jerarquia'] ?></td>
            <td colspan="12" >AÑO LICENCIAMIENTO: <?php echo  $fila['ano_licenciamiento'] ?></td>
            
        </tr>
        <tr>
            <td >MILITAR PROFESIONAL: <?php echo  $fila['militar_profesional'] ?></td>
            <td colspan="2">COMPONENTE:  <?php echo  $fila['componente'] ?></td>
            <td colspan="4">GRADO:  <?php echo  $fila['grado'] ?></td>
            <td colspan="12">AÑO GRADUACIÓN: <?php echo  $fila['ano_graduacion'] ?></td>
            
        </tr>
        <tr>
            <td rowspan="3">CURSOS MILITARES:</td>
            <td colspan="1">LECTURA DE MAPA:  <?php echo  $fila['lectura_mapa'] ?></td>
            <td colspan="1" >ZU-23: <?php echo  $fila['zu_23'] ?></td>
            <td  colspan="4">SANIDAD: <?php echo  $fila['sanidad'] ?></td>
            <td  colspan="12">FRANCOTIRADOR:  <?php echo  $fila['francotirador'] ?></td>
           
        </tr>
        <tr>
            <td colspan="3" >EXPLOSIVISTA: <?php echo  $fila['explosivista'] ?></td>
            <td  colspan="3">ZAPADOR:  <?php echo  $fila['zapador'] ?></td>
            <td colspan="4">TIRADOR EXPERTO:  <?php echo  $fila['tiro_combate'] ?></td>
            <td colspan="8">IGLAS: <?php echo  $fila['iglas'] ?></td>

        </tr>
        <tr>
            <td colspan="1">BTR 80: <?php echo  $fila['btr_80'] ?></td>
            <td colspan="2">GUÍA AÉREO: <?php echo  $fila['guia_aereo'] ?></td>
            <td colspan="7">PARACAIDISMO: <?php echo  $fila['paracaidismo'] ?></td>
            <td colspan="8">M.A.R: <?php echo  $fila['mar'] ?></td>

        </tr>
        <tr>
            <td colspan="18">OTROS CURSOS MILITARES: <?php echo  $fila['otros_cursos_militares'] ?></td>
        </tr>     


    <thead >
            <tr>
                <th colspan="18">C.- TAREAS ASIGNADAS PARA LA DEFENSA DEL TERRITORIO (M)</th>  
            </tr>
    </thead>
            <tr>
                <td colspan="18" >DESCRIPCIÓN DE LAS TAREAS ASIGNADAS: <?php echo  $fila['tareas'] ?></td>
                
    
            </tr>
       
        </table>
  
        <?php }?>

        </center>                     
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
$dompdf->setPaper('letter');
//$dompdf->setPaper('A4', 'landscape');

$dompdf->render();
$dompdf->stream("archivo_.pdf", array("Attachment"=>false));



    ?>