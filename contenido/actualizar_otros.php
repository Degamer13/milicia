<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Actualizar salud y otros</title>
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
       <?php require'nav.php';
       
        include('../php/conexion.php');     
    
        $id_s=$_GET["id_s"];
        $consulta= "SELECT * FROM persona p LEFT JOIN datos_militar d  ON d.id_mili=p.id_p LEFT JOIN adi_datos a ON d.adi=a.id_a LEFT JOIN region_tabla r ON a.id_adi=r.id_b LEFT JOIN zodi_tabla z ON r.id_region=z.id_c LEFT JOIN familia f ON f.id_familia=p.id_p LEFT JOIN datos_salud sa ON sa.id_salud=p.id_p LEFT JOIN tarea t ON t.id_tarea=p.id_p  LEFT JOIN cursos c ON c.id_cursos=p.id_p WHERE id_s='$id_s'";
       
 $ejecute= $conexion->query($consulta);
 $extraer= $ejecute->fetch_assoc(); 
       ?>
            
       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                      
                        <h1 class="mt-4">Actualización de Datos</h1>
                       <center>
                       <a  href="actualizar_persona.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-person-plus-fill"></i>Persona</a> 
                        <a  href="actualizar_familiar.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-people-fill"></i>Familiar</a>
                        <a  href="actualizar_militar.php?id_m=<?=$extraer['id_m']?>"><i class="bi bi-person-fill"></i>Militar</a>
                        <a  href="actualizar_otros.php?id_s=<?=$extraer['id_s']?>"><i class="bi bi-clipboard-plus-fill"></i>Salud y Otros</a>
                        <a  href="actualizar_cursos.php?id_cu=<?=$extraer['id_cu']?>"><i class="bi bi-journals"></i>Cursos</a>
                        <a  href="actualizar_tarea.php?id_t=<?=$extraer['id_t']?>"><i class="bi bi-journal-bookmark-fill"></i>Asignación de Tarea</a>
                        </center> 
       
    </div>
    <form id="regForm" action="../php/actualiza_otros.php?id_s=<?=$extraer['id_s']?>" enctype="multipart/form-data" method="POST" class="card bg-light" >

  <div class="tab">
  <h4 >Actualización de salud y otros:</h4>
  <label for="country" class="form-label">Registro Dental</label>

 
         <p>
         <select class="form-select" id="country" name="dental">
  <option value="<?php echo $extraer['dental'] ?>"><?php echo $extraer['dental'] ?></option>
         <option value="SI">SI</option>
         <option value="NO">NO</option>
        
       </select>
         </p>
   
         <label for="country" class="form-label">Alergico</label>
       
         <p>
         <select class="form-select" id="country"   name="alergico">
         <option value=" <?php echo $extraer['alergico'] ?>"> <?php echo $extraer['alergico'] ?></option>
        
         <option value="SI">SI</option>
         <option value="NO">NO</option>
        
       </select></p>
         <label for="country" class="form-label">Tatuaje</label>
        
         <p>
         <select class="form-select" id="country"   name="tatuaje">
         
         <option value="<?php echo $extraer['tatuaje'] ?>"><?php echo $extraer['tatuaje'] ?></option>
         <option value="SI">SI</option>
         <option value="NO">NO</option>
        
       </select> 
</p>
         <label for="lastName" class="form-label">Enfermedad</label>
         <p><input  type="text" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="enfermedad" value="<?php echo $extraer['enfermedad'] ?>"></p>
         <label for="firstName" class="form-label">Cantidad de Hijos</label>
         <p><input  type="number" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="cantidad_hijos" value="<?php echo $extraer['cantidad_hijos'] ?>"></p>
         <label for="firstName" class="form-label">Cantidad de Hijas</label>
         <p><input  type="number" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="cantidad_hijas" value="<?php echo $extraer['cantidad_hijas'] ?>"></p>
         <label for="firstName" class="form-label">Cantidad de Hermanos</label>
         <p><input  type="number" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="cantidad_hermanos" value="<?php echo $extraer['cantidad_hermanos'] ?>"></p>
         <label for="firstName" class="form-label">Cantidad de Hermanas</label>
         <p><input  type="number" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"" name="cantidad_hermanas" value="<?php echo $extraer['cantidad_hermanas'] ?>"></p>
  <label for="country" class="form-label">Vivienda Propia</label>
       
         <p>
         <select class="form-select" id="country"  name="vivienda_propia">
        
         <option value=" <?php echo $extraer['vivienda_propia'] ?>"> <?php echo $extraer['vivienda_propia'] ?></option>
         <option value="SI">SI</option>
         <option value="NO">NO</option>
        
       </select>
</p>
         <label for="firstName" class="form-label">Condición</label>
         <input  type="text" class="form-control" id="Apellido1"   oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"  name="condicion2" value="<?php echo $extraer['condicion2'] ?>">
         <label for="country" class="form-label">Vehiculo</label>
         
         <p>
         <select class="form-select" id="country"  name="vehiculo">
         <option value="<?php echo $extraer['vehiculo'] ?>"><?php echo $extraer['vehiculo'] ?></option>
         <option value="SI">SI</option>
         <option value="NO">NO</option>
        
       </select>
        </p>
         <label for="country" class="form-label">Botas</label>
         <p>
         <select class="form-select" id="country"  name="botas">
         <option value="<?php echo $extraer['botas'] ?>"><?php echo $extraer['botas'] ?></option>
         <option value="SI">SI</option>
         <option value="NO">NO</option>
         
       </select>
</p>
        </div>
  <div class="tab">
    <H4 >Actualizar Fisionomia</H4>
    <label for="lastName" class="form-label">Cara</label>
    <p><input  placeholder="" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" type="text" name="cara" value="<?php echo $extraer['cara'] ?>"></p>
    <label for="firstName" class="form-label">Cabello</label>
    <p><input   oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="cabello" value="<?php echo $extraer['cabello'] ?>"></p>

    <label for="firstName" class="form-label">Color de cabello</label>
    <p><input    oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="color_cabello" value="<?php echo $extraer['color_cabello'] ?>"></p>
    <label for="firstName" class="form-label">Peso</label>
    <p><input    oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="peso" type="number" value="<?php echo $extraer['peso'] ?>"></p>
    <label for="firstName" class="form-label">Estatura</label>
    <p><input    oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="estatura" type="number" value="<?php echo $extraer['estatura'] ?>" ></p>
    <label for="country" class="form-label">Grupo Sanguineo</label>

         <p>
         <select class="form-select" id="country"  name="grupo_sanguineo">
         <option value="<?php echo $extraer['grupo_sanguineo'] ?>"><?php echo $extraer['grupo_sanguineo'] ?></option>
         
         <option value="ORH+">ORH+</option>
         <option value="ORH-">ORH-</option>
         <option value="BRH+">BRH+</option>
         <option value="BRH-">BRH-</option>
         <option value="ARH+">ARH+</option>
         <option value="ARH-">ARH-</option>
         <option value="ABRH+">ABRH+</option>
         <option value="ABRH-">ABRH-</option>
        
       </select>
        </p>
         <label for="firstName" class="form-label">Color de Ojos</label>
         <p><input    oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="color_ojos" value="<?php echo $extraer['color_ojos'] ?>"></p>
         <label for="firstName" class="form-label">Labios</label>
         <p><input   oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="labios" value="<?php echo $extraer['labios'] ?>"></p>
        
  </div>
  <input  type='hidden' name='id_salud' value="<?php echo $extraer['id_salud'] ?>"> 
  
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