<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Actualizar Tarea</title>
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
       <?php require'nav1.php';
       
        include('../php/conexion.php');     
       
        $id_t =$_GET['id_t'];
        $consulta= "SELECT * FROM  persona p LEFT JOIN datos_militar d  ON d.id_mili=p.id_p LEFT JOIN adi_datos a ON d.adi=a.id_a LEFT JOIN region_tabla r ON a.id_adi=r.id_b LEFT JOIN zodi_tabla z ON r.id_region=z.id_c LEFT JOIN familia f ON f.id_familia=p.id_p LEFT JOIN datos_salud sa ON sa.id_salud=p.id_p LEFT JOIN tarea t ON t.id_tarea=p.id_p  LEFT JOIN cursos c ON c.id_cursos=p.id_p WHERE  id_t='$id_t'";
      
 $ejecute= $conexion->query($consulta);
 $extraer= $ejecute->fetch_assoc(); 
    
    
       ?>
            
       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Actualización de Datos </h1>
                        <center>
                        <a  href="actualizar_persona1.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-person-plus-fill"></i>Persona</a> 
                        <a  href="actualizar_familiar1.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-people-fill"></i>Familiar</a>
                        <a  href="actualizar_militar1.php?id_m=<?=$extraer['id_m']?>"><i class="bi bi-person-fill"></i>Militar</a>
                        <a  href="actualizar_otros1.php?id_s=<?=$extraer['id_s']?>"><i class="bi bi-clipboard-plus-fill"></i>Salud y Otros</a>
                        <a  href="actualizar_cursos1.php?id_cu=<?=$extraer['id_cu']?>"><i class="bi bi-journals"></i>Cursos</a>
                        <a  href="actualizar_tarea1.php?id_t=<?=$extraer['id_t']?>"><i class="bi bi-journal-bookmark-fill"></i>Asignación de Tarea</a>
                     
                     
                        </center> 
                        
       
    </div>
 
    <form id="regForm" action="../php/actualiza_tarea1.php?id_t=<?=$extraer['id_t']?>" method="POST"  class="card bg-light">
  
  
  <div class="tab">
  <H4 >Actualización de Tarea</H4>
 
  
 <label for="firstName" class="form-label">Asignacion de Tarea</label>

 <p><input  type="text" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="tareas" value="<?php echo $extraer['tareas'] ?>"></p>

  </div>
 
<br>
<input  type='hidden' name='id_tarea' value="<?php echo $extraer['id_tarea'] ?>"> 

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