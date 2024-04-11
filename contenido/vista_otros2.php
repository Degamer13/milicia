<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Vista salud y otros</title>
        <link href="../css/datatables@latest_dist_style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
     <link rel="stylesheet" href="../css/bootstrap-icons.css">
 <link rel="stylesheet" href="../css/vali.css">
 <link rel="stylesheet" href="../css/select2.min.css" />
 <link rel="Shortcut Icon" type="image/x-icon" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/select2-bootstrap-5-theme.min.css" />
    <style>
  a{
    text-decoration: none;
    font-family: sans-serif;
    color: #000;
   
  }
 </style>
    <!-- Or for RTL support -->
   

    <!-- Scripts -->    
<script src="../js/jquery.slim.min.js"></script>
    <script src="../js/select2.min.js"></script>

<script src="../js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       <?php require'nav2.php';
       
        include('../php/conexion.php');     
    
        $id_p=$_GET["id_p"];
        $consulta= "SELECT * FROM  persona p  LEFT JOIN datos_salud d ON d.id_salud=p.id_p WHERE id_p='$id_p'";
       
 $ejecute= $conexion->query($consulta);
 $extraer= $ejecute->fetch_assoc(); 
       ?>
            
       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                      
                        <h1 class="mt-4">Registro de Datos</h1>
                       <center>
                       <a  href="vista_persona2.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-person-plus-fill"></i>Persona</a> 
                        <a  href="vista_familiar2.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-people-fill"></i>Familiar</a>
                        <a  href="vista_militar2.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-person-fill"></i>Militar</a>
                        <a  href="vista_otros2.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-clipboard-plus-fill"></i>Salud y Otros</a>
                        <a  href="vista_cursos2.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-journals"></i>Cursos</a>
                        <a  href="vista_tarea2.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-journal-bookmark-fill"></i>Asignación de Tarea</a>
                        </center> 
       
    </div>
    <form id="regForm" action="registros_militares2.php" enctype="multipart/form-data" method="POST" class="card bg-light" >

  <div class="tab">
  <h4 >Registro de salud y otros:</h4>
  <label for="country" class="form-label">Registro Dental</label>
      
         <p><input disabled type="text" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="dental" value="<?php echo $extraer['dental'] ?>"></p>
   
         <label for="country" class="form-label">Alergico</label>
       
         <p><input disabled type="text" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="alergico" value="<?php echo $extraer['alergico'] ?>"></p>
         <label for="country" class="form-label">Tatuaje</label>
        
         <p><input disabled type="text" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="tatuaje" value="<?php echo $extraer['tatuaje'] ?>"></p>
         <label for="lastName" class="form-label">Enfermedad</label>
         <p><input disabled type="text" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="enfermedad" value="<?php echo $extraer['enfermedad'] ?>"></p>
         <label for="firstName" class="form-label">Cantidad de Hijos</label>
         <p><input disabled type="number" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="cantidad_hijos" value="<?php echo $extraer['cantidad_hijos'] ?>"></p>
         <label for="firstName" class="form-label">Cantidad de Hijas</label>
         <p><input disabled type="number" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="cantidad_hijas" value="<?php echo $extraer['cantidad_hijas'] ?>"></p>
         <label for="firstName" class="form-label">Cantidad de Hermanos</label>
         <p><input disabled type="number" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="cantidad_hermanos" value="<?php echo $extraer['cantidad_hermanos'] ?>"></p>
         <label for="firstName" class="form-label">Cantidad de Hermanas</label>
         <p><input disabled type="number" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="cantidad_hermanas" value="<?php echo $extraer['cantidad_hermanas'] ?>"></p>
  <label for="country" class="form-label">Vivienda Propia</label>
       
         <p><input disabled  type="text" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="vivienda_propia" value="<?php echo $extraer['vivienda_propia'] ?>"></p>
         <label for="firstName" class="form-label">Condición</label>
         <input disabled type="text" class="form-control" id="Apellido1"   oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"  name="condicion2" value="<?php echo $extraer['condicion2'] ?>">
         <label for="country" class="form-label">Vehiculo</label>
         
         <p><input disabled  type="text" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="vehiculo" value="<?php echo $extraer['vehiculo'] ?>"></p>
         <label for="country" class="form-label">Botas</label>
         <p><input disabled type="text" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="botas" value="<?php echo $extraer['botas'] ?>"></p>
        </div>
  <div class="tab">
    <H4 >Registro de Fisionomia</H4>
    <label for="lastName" class="form-label">Cara</label>
    <p><input disabled placeholder="" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" type="text" name="cara" value="<?php echo $extraer['cara'] ?>"></p>
    <label for="firstName" class="form-label">Cabello</label>
    <p><input  disabled oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="cabello" value="<?php echo $extraer['cabello'] ?>"></p>

    <label for="firstName" class="form-label">Color de cabello</label>
    <p><input  disabled  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="color_cabello" value="<?php echo $extraer['color_cabello'] ?>"></p>
    <label for="firstName" class="form-label">Peso</label>
    <p><input  disabled  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="peso" type="number" value="<?php echo $extraer['peso'] ?>"></p>
    <label for="firstName" class="form-label">Estatura</label>
    <p><input disabled   oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="estatura" type="number" value="<?php echo $extraer['estatura'] ?>" ></p>
    <label for="country" class="form-label">Grupo Sanguineo</label>

         <p><input disabled  type="text" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="grupo_sanguineo" value="<?php echo $extraer['grupo_sanguineo'] ?>"></p>
         <label for="firstName" class="form-label">Color de Ojos</label>
         <p><input disabled   oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="color_ojos" value="<?php echo $extraer['color_ojos'] ?>"></p>
         <label for="firstName" class="form-label">Labios</label>
         <p><input disabled  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="labios" value="<?php echo $extraer['labios'] ?>"></p>
        
  </div>
 
  
<br>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">regresar</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">siguiente</button>
    </div>
  </div>
  <!-- siguiente siguiente: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
   
  </div>
</form>
           
                </main>
       <?php require'footer.php';?>
     
        <script src="../js/buscar.js"></script>
       <script src="../js/multi1.js"></script>
        <script src="../js/bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="../js/simple-datatables@latest.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>