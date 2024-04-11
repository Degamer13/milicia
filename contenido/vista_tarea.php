<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Vista Tarea</title>
        <link href="../css/datatables@latest_dist_style.css" rel="stylesheet" />
        <link rel="Shortcut Icon" type="image/x-icon" href="../img/logo.png" />
        <link href="../css/styles.css" rel="stylesheet" />
     <link rel="stylesheet" href="../css/bootstrap-icons.css">
 <link rel="stylesheet" href="../css/vali.css">
 <link rel="stylesheet" href="../css/select2.min.css" />
    <link rel="stylesheet" href="../css/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
    <style>
  a{
    text-decoration: none;
    font-family: sans-serif;
    color: #000;
   
  }
 </style>


    <!-- Scripts -->    
<script src="../js/jquery.slim.min.js"></script>
    <script src="../js/select2.min.js"></script>

<script src="../js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       <?php require'nav.php';
       
        include('../php/conexion.php');     
        $id_p=$_GET["id_p"];
        $consulta= "SELECT * FROM  persona p  LEFT JOIN tarea t ON t.id_tarea=p.id_p WHERE id_p='$id_p'";
       
 $ejecute= $conexion->query($consulta);
 $extraer= $ejecute->fetch_assoc(); 
    
    
       ?>
            
       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Registro de Datos </h1>
                        <center>
                        <a  href="vista_persona.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-person-plus-fill"></i>Persona</a> 
                        <a  href="vista_familiar.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-people-fill"></i>Familiar</a>
                        <a  href="vista_militar.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-person-fill"></i>Militar</a>
                        <a  href="vista_otros.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-clipboard-plus-fill"></i>Salud y Otros</a>
                        <a  href="vista_cursos.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-journals"></i>Cursos</a>
                        <a  href="vista_tarea.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-journal-bookmark-fill"></i>Asignación de Tarea</a>
                     
                        </center> 
                        
       
    </div>
    <form id="regForm" action="registros_militares.php" method="POST"  class="card bg-light">
  
  
  <div class="tab">
  <H4 >Registro de Tarea</H4>
 
  
 <label for="firstName" class="form-label">Asignacion de Tarea</label>

 <p><input disabled type="text" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="tareas" value="<?php echo $extraer['tareas'] ?>"></p>

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