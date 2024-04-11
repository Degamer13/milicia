<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Actualizar Cursos</title>
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
       <?php require'nav.php';
       
        include('../php/conexion.php');     
        $id_cu=$_GET["id_cu"];
        $consulta= "SELECT * FROM persona p LEFT JOIN datos_militar d  ON d.id_mili=p.id_p LEFT JOIN adi_datos a ON d.adi=a.id_a LEFT JOIN region_tabla r ON a.id_adi=r.id_b LEFT JOIN zodi_tabla z ON r.id_region=z.id_c LEFT JOIN familia f ON f.id_familia=p.id_p LEFT JOIN datos_salud sa ON sa.id_salud=p.id_p LEFT JOIN tarea t ON t.id_tarea=p.id_p  LEFT JOIN cursos c ON c.id_cursos=p.id_p WHERE id_cu='$id_cu'";
       
 $ejecute= $conexion->query($consulta);
 $extraer= $ejecute->fetch_assoc(); 
    
       ?>
            
       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Actualización de Datos </h1>
                        <center>
                        <a  href="actualizar_persona.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-person-plus-fill"></i>Persona</a> 
                        <a  href="actualizar_familiar.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-people-fill"></i>Familiar</a>
                        <a  href="actualizar_militar.php?id_m=<?=$extraer['id_m']?>"><i class="bi bi-person-fill"></i>Militar</a>
                        <a  href="actualizar_otros.php?id_s=<?=$extraer['id_s']?>"><i class="bi bi-clipboard-plus-fill"></i>Salud y Otros</a>
                        <a  href="actualizar_cursos.php?id_cu=<?=$extraer['id_cu']?>"><i class="bi bi-journals"></i>Cursos</a>
                        <a  href="actualizar_tarea.php?id_t=<?=$extraer['id_t']?>"><i class="bi bi-journal-bookmark-fill"></i>Asignación de Tarea</a>
                     
                        </center> 
       
    </div>
    <form id="regForm" action="../php/actualiza_cursos.php?id_cu=<?=$extraer['id_cu']?>" method="POST" class="card bg-light" >
 
 
 <div class="tab">
 <H4 >Actualizar Cursos</H4>
 <label for="control1" class="form-label">LECTURA DE MAPA</label> 
  
      <p>
      <select class="form-select" id="control1" name="lectura_mapa" required=""> 

      <option value="<?php echo $extraer['lectura_mapa'] ?>"><?php echo $extraer['lectura_mapa'] ?></option> 
<option value="SI">SI</option> 
<option value="NO">NO</option>


</select>  
</p>  
      <label for="control1" class="form-label">TIRADOR EXPERTO</label> 
  
<p>
<select class="form-select" id="control1" name="tiro_combate" required=""> 

<option value="<?php echo $extraer['tiro_combate'] ?>"><?php echo $extraer['tiro_combate'] ?></option> 
<option value="SI">SI</option> 
<option value="NO">NO</option>


</select>     
</p>
<label for="control1" class="form-label">ZU-23</label> 

<p>
<select class="form-select" id="control1" name="zu_23" required=""> 

<option value="<?php echo $extraer['zu_23'] ?>"><?php echo $extraer['zu_23'] ?></option> 
<option value="SI">SI</option> 
<option value="NO">NO</option>


</select>      
</p>
<label for="control1" class="form-label">IGLAS</label> 

<p>
<select class="form-select" id="control1" name="iglas" required=""> 

<option value="<?php echo $extraer['iglas'] ?>"><?php echo $extraer['iglas'] ?></option> 
<option value="SI">SI</option> 
<option value="NO">NO</option>


</select>         
</p>
<label for="control1" class="form-label">SANIDAD</label> 

<p>
<select class="form-select" id="control1" name="sanidad" required=""> 

<option value="<?php echo $extraer['sanidad'] ?>"><?php echo $extraer['sanidad'] ?></option> 
<option value="SI">SI</option> 
<option value="NO">NO</option>


</select>   
</p>
<label for="control1" class="form-label">BTR 80</label> 

<p><select class="form-select" id="control1" name="btr_80" required=""> 

<option value="<?php echo $extraer['btr_80'] ?>"><?php echo $extraer['btr_80'] ?></option> 
<option value="SI">SI</option> 
<option value="NO">NO</option>


</select>   </p>

<label for="control1" class="form-label">FRANCOTIRADOR</label> 

<p><select class="form-select" id="control1" name="francotirador" required=""> 

<option value="<?php echo $extraer['francotirador'] ?>"><?php echo $extraer['francotirador'] ?></option> 
<option value="SI">SI</option> 
<option value="NO">NO</option>


</select>   </p>

<label for="control1" class="form-label">GUÍA AÉREO</label> 
<p><select class="form-select" id="control1" name="guia_aereo" required=""> 

<option value="<?php echo $extraer['guia_aereo'] ?>"><?php echo $extraer['guia_aereo'] ?></option> 
<option value="SI">SI</option> 
<option value="NO">NO</option>


</select>   </p>

<label for="control1" class="form-label">EXPLOSIVISTA</label> 
<p><select class="form-select" id="control1" name="explosivista" required=""> 

<option value="<?php echo $extraer['explosivista'] ?>"><?php echo $extraer['explosivista'] ?></option> 
<option value="SI">SI</option> 
<option value="NO">NO</option>


</select>   </p>

<label for="control1" class="form-label">PARACAIDISMO</label> 
<p><select class="form-select" id="control1" name="paracaidismo" required=""> 

<option value="<?php echo $extraer['paracaidismo'] ?>"><?php echo $extraer['paracaidismo'] ?></option> 
<option value="SI">SI</option> 
<option value="NO">NO</option>


</select>   </p>

<label for="control1" class="form-label">ZAPADOR</label> 

<p><select class="form-select" id="control1" name="zapador" required=""> 

<option value="<?php echo $extraer['zapador'] ?>"><?php echo $extraer['zapador'] ?></option> 
<option value="SI">SI</option> 
<option value="NO">NO</option>


</select>   </p>


<label for="control1" class="form-label">M.A.R.</label> 
<p><select class="form-select" id="control1" name="mar" required=""> 

<option value="<?php echo $extraer['mar'] ?>"><?php echo $extraer['mar'] ?></option> 
<option value="SI">SI</option> 
<option value="NO">NO</option>


</select>   </p>

   <label for="lastName" class="form-label">CURSOS NO MILITARES:</label>
   <p><input   oninput="this.className = ''" name="cursos_no_militares" value="<?php echo $extraer['cursos_no_militares'] ?>" onkeyup="this.value=this.value.toUpperCase();"></p>
   <label for="lastName" class="form-label">OTRAS HABILIDADES:</label>
   <p><input   oninput="this.className = ''" name="otras_habilidades" value="<?php echo $extraer['otras_habilidades'] ?>" onkeyup="this.value=this.value.toUpperCase();"></p>
   <label for="lastName" class="form-label">OTROS CURSOS MILITARES</label>
   <p><input oninput="this.className = ''" name="otros_cursos_militares" value="<?php echo $extraer['otros_cursos_militares'] ?>" onkeyup="this.value=this.value.toUpperCase();"></p>
  
 </div>
 <input  type='hidden' name='id_cursos' value="<?php echo $extraer['id_cursos'] ?>"> 

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