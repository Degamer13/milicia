<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registro</title>
        <link rel="Shortcut Icon" type="image/x-icon" href="../img/logo.png" />
        <link href="../css/datatables@latest_dist_style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
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
       <?php require'nav.php';
       
        include('../php/conexion.php');     
    
       ?>
            
       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Registro </h1>
                        
       
    </div>
    <form id="regForm" action="../php/cursos.php" method="POST" class="card bg-light" >
 
 
 <div class="tab">
 <H4 >Registro De Cursos</H4>
 <label for="control1" class="form-label">LECTURA DE MAPA</label> 
      <select class="form-select" id="control1" name="lectura_mapa" required=""> 
      
          <option value="SI">SI</option> 
          <option value="NO">NO</option>
          
          
      </select> 
 
      <label for="control1" class="form-label">TIRADOR EXPERTO</label> 
<select class="form-select" id="control1" name="tiro_combate" required=""> 

<option value="SI">SI</option> 
<option value="NO">NO</option>


</select>     
           
<label for="control1" class="form-label">ZU-23</label> 
<select class="form-select" id="control1" name="zu_23" required=""> 

<option value="SI">SI</option> 
<option value="NO">NO</option>


</select> 
<label for="control1" class="form-label">IGLAS</label> 
<select class="form-select" id="control1" name="iglas" required=""> 

<option value="SI">SI</option> 
<option value="NO">NO</option>


</select> 
<label for="control1" class="form-label">SANIDAD</label> 
<select class="form-select" id="control1" name="sanidad" required=""> 

<option value="SI">SI</option> 
<option value="NO">NO</option>


</select> 
<label for="control1" class="form-label">BTR 80</label> 
<select class="form-select" id="control1" name="btr_80" required=""> 

<option value="SI">SI</option> 
<option value="NO">NO</option>


</select> 

<label for="control1" class="form-label">FRANCOTIRADOR</label> 
<select class="form-select" id="control1" name="francotirador" required=""> 

<option value="SI">SI</option> 
<option value="NO">NO</option>


</select> 
<label for="control1" class="form-label">GUÍA AÉREO</label> 
<select class="form-select" id="control1" name="guia_aereo" required=""> 

<option value="SI">SI</option> 
<option value="NO">NO</option>


</select> 
<label for="control1" class="form-label">EXPLOSIVISTA</label> 
<select class="form-select" id="control1" name="explosivista" required=""> 

<option value="SI">SI</option> 
<option value="NO">NO</option>


</select> 
<label for="control1" class="form-label">PARACAIDISMO</label> 
<select class="form-select" id="control1" name="paracaidismo" required=""> 

<option value="SI">SI</option> 
<option value="NO">NO</option>


</select>
<label for="control1" class="form-label">ZAPADOR</label> 
<select class="form-select" id="control1" name="zapador" required=""> 

<option value="SI">SI</option> 
<option value="NO">NO</option>


</select> 
<label for="control1" class="form-label">M.A.R.</label> 
<select class="form-select" id="control1" name="mar" required=""> 

<option value="SI">SI</option> 
<option value="NO">NO</option>


</select> 
   <label for="lastName" class="form-label">CURSOS NO MILITARES:</label>
   <p><input  oninput="this.className = ''" name="cursos_no_militares" onkeyup="this.value=this.value.toUpperCase();"></p>
   <label for="lastName" class="form-label">OTRAS HABILIDADES:</label>
   <p><input  oninput="this.className = ''" name="otras_habilidades" onkeyup="this.value=this.value.toUpperCase();"></p>
   <label for="lastName" class="form-label">OTROS CURSOS MILITARES</label>
   <p><input  oninput="this.className = ''" name="otros_cursos_militares" onkeyup="this.value=this.value.toUpperCase();"></p>
   <label for="lastName" class="form-label">Seleccione la cedula del militar</label>
   <select class="form-select" id="single-select-field" data-placeholder="Buscar Cedula"
     name="id_cursos"  oninput="this.className = ''"> 
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