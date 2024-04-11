<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Vista Cursos</title>
        <link href="../css/datatables@latest_dist_style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
     <link rel="stylesheet" href="../css/bootstrap-icons.css">
     <link rel="Shortcut Icon" type="image/x-icon" href="../img/logo.png" />
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
       <?php require'nav2.php';
       
        include('../php/conexion.php');     
        $id_p=$_GET["id_p"];
        $consulta= "SELECT * FROM  persona p  LEFT JOIN cursos c ON c.id_cursos=p.id_p WHERE id_p='$id_p'";
       
 $ejecute= $conexion->query($consulta);
 $extraer= $ejecute->fetch_assoc(); 
    
       ?>
            
       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Registro de Datos </h1>
                        <center>
                        <a  href="vista_persona2.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-person-plus-fill"></i>Persona</a> 
                        <a  href="vista_familiar2.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-people-fill"></i>Familiar</a>
                        <a  href="vista_militar2.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-person-fill"></i>Militar</a>
                        <a  href="vista_otros2.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-clipboard-plus-fill"></i>Salud y Otros</a>
                        <a  href="vista_cursos2.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-journals"></i>Cursos</a>
                        <a  href="vista_tarea2.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-journal-bookmark-fill"></i>Asignación de Tarea</a>
                        </center> 
       
    </div>
    <form id="regForm" action="registros_militares2.php" method="POST" class="card bg-light" >
 
 
 <div class="tab">
 <H4 >Registro De Cursos</H4>
 <label for="control1" class="form-label">LECTURA DE MAPA</label> 
  
      <p><input disabled  oninput="this.className = ''" name="lectura_mapa" value="<?php echo $extraer['lectura_mapa'] ?>" onkeyup="this.value=this.value.toUpperCase();"></p>
 
      <label for="control1" class="form-label">TIRADOR EXPERTO</label> 
  
<p><input disabled oninput="this.className = ''" name="tiro_combate" value="<?php echo $extraer['tiro_combate'] ?>" onkeyup="this.value=this.value.toUpperCase();"></p>
           
<label for="control1" class="form-label">ZU-23</label> 

<p><input disabled  oninput="this.className = ''" name="zu_23" value="<?php echo $extraer['zu_23'] ?>" onkeyup="this.value=this.value.toUpperCase();"></p>
<label for="control1" class="form-label">IGLAS</label> 

<p><input disabled  oninput="this.className = ''" name="iglas" value="<?php echo $extraer['iglas'] ?>" onkeyup="this.value=this.value.toUpperCase();"></p>
<label for="control1" class="form-label">SANIDAD</label> 

<p><input disabled  oninput="this.className = ''" name="sanidad" value="<?php echo $extraer['sanidad'] ?>" onkeyup="this.value=this.value.toUpperCase();"></p>
<label for="control1" class="form-label">BTR 80</label> 

<p><input disabled  oninput="this.className = ''" name="btr_80" value="<?php echo $extraer['btr_80'] ?>" onkeyup="this.value=this.value.toUpperCase();"></p>

<label for="control1" class="form-label">FRANCOTIRADOR</label> 

<p><input disabled  oninput="this.className = ''" name="francotirador" value="<?php echo $extraer['francotirador'] ?>" onkeyup="this.value=this.value.toUpperCase();"></p>
<label for="control1" class="form-label">GUÍA AÉREO</label> 

<p><input  disabled oninput="this.className = ''" name="guia_aereo" value="<?php echo $extraer['guia_aereo'] ?>" onkeyup="this.value=this.value.toUpperCase();"></p>
<label for="control1" class="form-label">EXPLOSIVISTA</label> 
 
<p><input disabled  oninput="this.className = ''" name="explosivista" value="<?php echo $extraer['explosivista'] ?>" onkeyup="this.value=this.value.toUpperCase();"></p>
<label for="control1" class="form-label">PARACAIDISMO</label> 

<p><input disabled oninput="this.className = ''" name="paracaidismo" value="<?php echo $extraer['paracaidismo'] ?>" onkeyup="this.value=this.value.toUpperCase();"></p>
<label for="control1" class="form-label">ZAPADOR</label> 

<p><input disabled oninput="this.className = ''" name="zapador" value="<?php echo $extraer['zapador'] ?>" onkeyup="this.value=this.value.toUpperCase();"></p>
<label for="control1" class="form-label">M.A.R.</label> 

<p><input disabled oninput="this.className = ''" name="mar" value="<?php echo $extraer['mar'] ?>" onkeyup="this.value=this.value.toUpperCase();"></p>
   <label for="lastName" class="form-label">CURSOS NO MILITARES:</label>
   <p><input disabled  oninput="this.className = ''" name="cursos_no_militares" value="<?php echo $extraer['cursos_no_militares'] ?>" onkeyup="this.value=this.value.toUpperCase();"></p>
   <label for="lastName" class="form-label">OTRAS HABILIDADES:</label>
   <p><input disabled  oninput="this.className = ''" name="otras_habilidades" value="<?php echo $extraer['otras_habilidades'] ?>" onkeyup="this.value=this.value.toUpperCase();"></p>
   <label for="lastName" class="form-label">OTROS CURSOS MILITARES</label>
   <p><input disabled oninput="this.className = ''" name="otros_cursos_militares" value="<?php echo $extraer['otros_cursos_militares'] ?>" onkeyup="this.value=this.value.toUpperCase();"></p>
  
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