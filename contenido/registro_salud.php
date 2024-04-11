<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registro</title>
        <link href="../css/datatables@latest_dist_style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <link rel="Shortcut Icon" type="image/x-icon" href="../img/logo.png" />
     <link rel="stylesheet" href="../css/bootstrap-icons.css">
 <link rel="stylesheet" href="../css/vali.css">
 <link rel="stylesheet" href="../css/select2.min.css" />
    <link rel="stylesheet" href="../css/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
   

    <!-- Scripts -->    
<script src="../js/jquery.slim.min.js"></script>
    <script src="../js/select2.min.js"></script>

<script src="../js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       <?php require'nav1.php';
       
        include('../php/conexion.php');     
    
       ?>
            
       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Registro </h1>
                        
       
    </div>
    <form id="regForm" action="../php/reg1.php" enctype="multipart/form-data" method="POST" class="card bg-light" >

  <div class="tab">
  <h4 >Registro de salud y otros:</h4>
  <label for="country" class="form-label">Registro Dental</label>
         <select class="form-select" id="country" name="dental">
         
           <option value="SI">SI</option>
           <option value="NO">NO</option>
          
         </select>
   
         <label for="country" class="form-label">Alergico</label>
         <select class="form-select" id="country"   name="alergico">
         
           <option value="SI">SI</option>
           <option value="NO">NO</option>
          
         </select>
         <label for="country" class="form-label">Tatuaje</label>
         <select class="form-select" id="country"   name="tatuaje">
         
           <option value="SI">SI</option>
           <option value="NO">NO</option>
          
         </select>
         <label for="lastName" class="form-label">Enfermedad</label>
         <p><input type="text" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="enfermedad"></p>
         <label for="firstName" class="form-label">Cantidad de Hijos</label>
         <p><input type="number" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="cantidad_hijos"></p>
         <label for="firstName" class="form-label">Cantidad de Hijas</label>
         <p><input type="number" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="cantidad_hijas"></p>
         <label for="firstName" class="form-label">Cantidad de Hermanos</label>
         <p><input type="number" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="cantidad_hermanos"></p>
         <label for="firstName" class="form-label">Cantidad de Hermanas</label>
         <p><input type="number" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="cantidad_hermanas"></p>
  <label for="country" class="form-label">Vivienda Propia</label>
         <select class="form-select" id="country"  name="vivienda_propia">
         
           <option value="SI">SI</option>
           <option value="NO">NO</option>
          
         </select>
         <label for="firstName" class="form-label">Condición</label>
         <input type="text" class="form-control" id="Apellido1"   oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="" name="condicion2">
         <label for="country" class="form-label">Vehiculo</label>
         <select class="form-select" id="country"  name="vehiculo">
         
           <option value="SI">SI</option>
           <option value="NO">NO</option>
          
         </select>
         <label for="country" class="form-label">Botas</label>
         <select class="form-select" id="country"  name="botas">
         
           <option value="SI">SI</option>
           <option value="NO">NO</option>
           
         </select>
        </div>
  <div class="tab">
    <H4 >Registro de Fisionomia</H4>
    <label for="lastName" class="form-label">Cara</label>
    <p><input placeholder="" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" type="text" name="cara"></p>
    <label for="firstName" class="form-label">Cabello</label>
    <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="cabello"></p>

    <label for="firstName" class="form-label">Color de cabello</label>
    <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="color_cabello"></p>
    <label for="firstName" class="form-label">Peso</label>
    <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="peso" type="number"></p>
    <label for="firstName" class="form-label">Estatura</label>
    <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="estatura" type="number"></p>
    <label for="country" class="form-label">Grupo Sanguineo</label>
         <select class="form-select" id="country"  name="grupo_sanguineo">
         
           <option value="ORH+">ORH+</option>
           <option value="ORH-">ORH-</option>
           <option value="BRH+">BRH+</option>
           <option value="BRH-">BRH-</option>
           <option value="ARH+">ARH+</option>
           <option value="ARH-">ARH-</option>
           <option value="ABRH+">ABRH+</option>
           <option value="ABRH-">ABRH-</option>
          
         </select>
         <label for="firstName" class="form-label">Color de Ojos</label>
         <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="color_ojos"></p>
         <label for="firstName" class="form-label">Labios</label>
         <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="labios"></p>
         <label for="lastName" class="form-label">Seleccione la cedula del militar</label>
    <select class="form-select" id="single-select-field" data-placeholder="Buscar Cedula"
      name="id_salud"  oninput="this.className = ''"> 
    <?php  
  
  $queru="SELECT * FROM persona"; 
  $resultadu=mysqli_query($conexion, $queru); ?> 
  
   
    
      <?php 
        while($listo=mysqli_fetch_array($resultadu)) 
        echo "<option  style='font-family:Helvetica;'' value='".$listo["id_p"]."'>".$listo["nombre1"]." ".$listo["apellido1"]." ".$listo["cedula"]."</option>";  
      ?> 
       </select> 
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
       <script src="../js/multi.js"></script>
        <script src="../js/bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="../js/simple-datatables@latest.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>