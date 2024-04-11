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
    <form id="regForm" action="../php/tarea.php" method="POST"  class="card bg-light">
  
  
  <div class="tab">
  <H4 >Registro de Tarea</H4>
 
  
 <label for="firstName" class="form-label">Asignacion de Tarea</label>

 <p><input type="text" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="tareas"></p>
 <label for="lastName" class="form-label">Seleccione la cedula del militar</label>
 <select class="form-select" id="single-select-field" data-placeholder="Buscar Cedula"
   name="id_tarea"  oninput="this.className = ''"> 
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