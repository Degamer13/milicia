<?php
                               
require"../php/conexion.php";

$id_p =$_GET['id_p'];

$consulta= "SELECT * FROM  persona p LEFT JOIN datos_militar d  ON d.id_mili=p.id_p LEFT JOIN adi_datos a ON d.adi=a.id_a LEFT JOIN region_tabla r ON a.id_adi=r.id_b LEFT JOIN zodi_tabla z ON r.id_region=z.id_c LEFT JOIN familia f ON f.id_familia=p.id_p LEFT JOIN datos_salud sa ON sa.id_salud=p.id_p LEFT JOIN tarea t ON t.id_tarea=p.id_p  LEFT JOIN cursos c ON c.id_cursos=p.id_p WHERE id_p='$id_p'";
$ejecute= $conexion->query($consulta);
$extraer= $ejecute->fetch_assoc();

 ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Actualizar Persona</title>
        <link rel="Shortcut Icon" type="image/x-icon" href="../img/logo.png" />
        <link href="../css/datatables@latest_dist_style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
     <link rel="stylesheet" href="../css/bootstrap-icons.css">
 <link rel="stylesheet" href="../css/vali.css">
 <style>
  a{
    text-decoration: none;
    font-family: sans-serif;
    color: #000;
   
  }
 </style>
 
<script src="../js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       <?php require'nav.php';?>
            
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
   
    <form id="regForm" action="../php/actualiza_persona.php?id_p=<?=$extraer['id_p']?>" enctype="multipart/form-data" method="POST" class=" card bg bg-light" >

    
  <div class="tab">
  <h4 class="rounded float-start">Actualizar Datos Personales:</h4> 

  <img class="rounded float-end"  src="http://<?php echo $_SERVER['HTTP_HOST'];?>/milicia/php/imagenes/<?php echo $extraer['imagen'];?>" width='135' >
<br><br><br><br><br><br><br>


  <label for="firstName" class="form-label">Fecha de Hoy</label>
  <input   type="date"  name="fecha_registro" id="FechaActual" ><script>var fecha = new Date();
document.getElementById("FechaActual").value = fecha.toJSON().slice(0,10);</script>
  <label for="firstName" class="form-label">Primer Nombre</label>
    <p><input class="form-control" onkeyup="this.value=this.value.toUpperCase();"  oninput="this.className = ''" name="nombre1" value="<?php echo $extraer['nombre1'] ?>" required></p>
    <label for="lastName" class="form-label">Segundo Nombre</label>
    <p><input  class="form-control" onkeyup="this.value=this.value.toUpperCase();"  oninput="this.className = ''" name="nombre2" value="<?php echo $extraer['nombre2'] ?>" required></p>
    <label for="firstName" class="form-label">Primer Apellido</label>
    <p><input  class="form-control" onkeyup="this.value=this.value.toUpperCase();"  oninput="this.className = ''" name="apellido1" value="<?php echo $extraer['apellido1'] ?>" required></p>
    <label for="lastName" class="form-label">Segundo Apellido</label>
    <p><input  class="form-control" onkeyup="this.value=this.value.toUpperCase();"  oninput="this.className = ''" name="apellido2" value="<?php echo $extraer['apellido2'] ?>" required></p>
    <label for="username" class="form-label">Cedula</label>
    <p><input class="form-control" type="number"  oninput="this.className = ''" name="cedula" value="<?php echo $extraer['cedula'] ?>"   required ></p>
    <label for="telefono" class="form-label">Telefono</label>
    <p><input class="form-control" type="number"  oninput="this.className = ''" name="telefono" value="<?php echo $extraer['telefono'] ?>" required></p>
    <label for="country" class="form-label">Genero</label>
             
    <p>
    <select class="form-select" oninput="this.className = ''" name="genero" id="country" required>
    <option value="<?php echo $extraer['genero'] ?>"><?php echo $extraer['genero'] ?></option>   
    <option value="HOMBRE">HOMBRE</option>
                <option value="MUJER">MUJER</option>
              </select>
     </p>
         
              <label for="country" class="form-label">Estado Civil</label>
              <p>
              <select class="form-select" oninput="this.className = ''" name="estado_civil" id="country" required>
              <option value="<?php echo $extraer['estado_civil'] ?>"><?php echo $extraer['estado_civil'] ?></option>
              <option value="SOLTERO">SOLTERO</option>
                <option value="CASADO">CASADO</option>
                <option value="DIVORSIADO">DIVORSIADO</option>
                <option value="CONCUBINATO">CONCUBINATO</option>	
                <option value="VIUDO">VIUDO</option>
               
              </select>
             
              <label for="telefono" class="form-label">Fecha de Nacimiento</label>
    <input  class="form-control" data-provide="datepicker" type="date" id="fechaNacimiento" value="<?php echo $extraer['fecha_nacimiento'] ?>"  oninput="this.className = ''" name="fecha_nacimiento"  min="1930-01-01" max="2025-12-31" required>
    <label for="zip" class="form-label">Edad<h6 ></h6></label>
   <p> <input  class="form-control" type="number" oninput="this.className = ''" id="edad" value="<?php echo $extraer['edad'] ?>"  name="edad"  required></p>
  
    
    <label for="state" class="form-label">Posee Carnet de la Patria</label>
   <p><select class="form-select" oninput="this.className = ''" name="carnet_patria" id="state" required>
   <option value="<?php echo $extraer['carnet_patria'] ?>"><?php echo $extraer['carnet_patria'] ?></option>
              <option value="NO">NO</option>
              <option value="SI">SI</option>
            </select>
    </p>
            
              <label for="zip" class="form-label">Serial del Carnet</label>
    <p><input  class="form-control" type="number" value="<?php echo $extraer['seriall'] ?>" name="seriall" oninput="this.className = ''" ></p>
    <label for="zip" class="form-label">Codigo del Carnet</label>
    <p><input  class="form-control" type="number"  value="<?php echo $extraer['codigo'] ?>" oninput="this.className = ''" name="codigo" required></p>
    <label for="zip" class="form-label">Foto Del Miliciano(a)</label>
    <p><input class="form-control" type="file" oninput="this.className = ''" name="imagen" accept="image/*" required></p>
   
    
  </div>
  <div class="tab">
    <H4>Redes Sociales</H4>
    <label for="firstName" class="form-label">Correo ELectronico</label>
    <p><input  placeholder="" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" type="email" value="<?php echo $extraer['correo'] ?>" name="correo" id="email"> <span id="email-validation-message"></span></p>
    <label for="lastName" class="form-label">Redes Sociales</label>
    <p><input   oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="redes_sociales" value="<?php echo $extraer['redes_sociales'] ?>"></p>
    <label for="lastName" class="form-label">Religión</label>
    <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="religion"value="<?php echo $extraer['religion'] ?>"></p>
    <label for="lastName" class="form-label">Sector</label>
    <p><input   oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="sector" value="<?php echo $extraer['sector'] ?>"></p>
    <label for="lastName" class="form-label">Dirección</label>
    <p><input   oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="direccion" value="<?php echo $extraer['direccion'] ?>"></p>
    
  </div>
 
  <div class="tab">
  <H4>Registro de Votaciones</H4>
  <label for="lastName" class="form-label">Unidad</label>
    <p><input type="text" value="<?php echo $extraer['unidad'] ?>"  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="unidad"></p>
    <label for="lastName"  class="form-label">Municipio</label>
    <p><input   type="text" value="<?php echo $extraer['municipio'] ?>"  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="municipio"></p>
    <label for="lastName" class="form-label">Parroquia</label>
    <p><input  type="text" value="<?php echo $extraer['parroquia'] ?>"  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="parroquia"></p>
    <label for="lastName"  class="form-label">Apdi</label>
    <p><input type="text" value="<?php echo $extraer['apdi'] ?>"  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="apdi"></p>
    <label for="lastName" class="form-label">Bpdi</label>
    <p><input type="text" value="<?php echo $extraer['bpdi'] ?>" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="bpdi"></p>
    <label for="lastName" class="form-label">Updi</label>
    <p><input  type="text" value="<?php echo $extraer['updi'] ?>" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="updi"></p>
   
   
  </div>
   
  <div class="tab">
  <H4>Registro Bancario</H4>
  <label for="control1" class="form-label">Tipo de Banco</label> 
  <p>
  <select class="form-select" oninput="this.className = ''"  id="cuenta" name="cuenta" required=""> 
  <option value="<?php echo $extraer['cuenta'] ?>"><?php echo $extraer['cuenta'] ?></option> 
       <option value="VENEZUELA">VENEZUELA</option> 
       <option value="BANFANB">BANFANB</option>
       <option value="BICENTENARIO">BICENTENARIO</option> 
       
   </select> 
  </p>
      
      <label for="firstName" class="form-label">Numero De Cuenta</label>
    <p><input  type="number" oninput="this.className = ''" value="<?php echo $extraer['numero_cuenta'] ?>" name="numero_cuenta"></p>
    
    
  </div>
  <!-- 
  <div class="tab">
  <H4>Registro Familiar</H4>
  
  <label for="control1" class="form-label">Seleccione un parentesco</label> 
      <select class="form-select" id="control1" name="parentesco"  oninput="this.className = ''"> 
          <option value=""></option>
          <option value="PADRE">PADRE</option> 
          <option value="MADRE">MADRE</option>
          <option value="CONYUGUE">CONYUGUE</option> 
          <option value="HIJO(A)">HIJO(A)</option> 
          <option value="HERMANO(A)">HERMANO(A)</option> 
      </select> 
             
            
    <label for="lastName" class="form-label">Cedula</label>
    <p><input  oninput="this.className = ''" name="cedula1" type="number"></p>
    <label for="lastName" class="form-label">Nombre y Apellido</label>
    <p><input  oninput="this.className = ''" name="nombre_apellido"></p>
    <label for="lastName" class="form-label">Telefono</label>
    <p><input  oninput="this.className = ''" name="telefono1" type="number"></p>
    <label for="lastName" class="form-label">Ocupación</label>
    <p><input  oninput="this.className = ''" name="ocupacion"></p>
    <label for="lastName" class="form-label">Cedula</label>
    <p><input  oninput="this.className = ''" name="id_familia" type="text"></p>
  </div>
    -->
  <div class="tab">
  <H4>Registro de Trabajo</H4>
  
    <label for="lastName" class="form-label">Nombre de la Empresa</label>
    <p><input   value="<?php echo $extraer['empresa'] ?>" name="empresa" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" type="text"></p>
    <label for="lastName" class="form-label">Dirección de la Empresa</label>
    <p><input   value="<?php echo $extraer['direccion1'] ?>" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="direccion1" type="text"></p>
    <label for="lastName" class="form-label">Telefono</label>
    <p><input  value="<?php echo $extraer['telefono1'] ?>" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="telefono1" type="number"></p>
    <label for="lastName" class="form-label">Cargo</label>
    <p><input  value="<?php echo $extraer['cargo1'] ?>"  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="cargo1" type="text"></p>
 
   
  </div>

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
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

    
    
                      
                </main>
       <?php require'footer.php';?>
       <script>
        const fechaNacimiento = document.getElementById("fechaNacimiento");
const edad = document.getElementById("edad");

const calcularEdad = (fechaNacimiento) => {
    const fechaActual = new Date();
    const anoActual = parseInt(fechaActual.getFullYear());
    const mesActual = parseInt(fechaActual.getMonth()) + 1;
    const diaActual = parseInt(fechaActual.getDate());

    // 2016-07-11
    const anoNacimiento = parseInt(String(fechaNacimiento).substring(0, 4));
    const mesNacimiento = parseInt(String(fechaNacimiento).substring(5, 7));
    const diaNacimiento = parseInt(String(fechaNacimiento).substring(8, 10));

    let edad = anoActual - anoNacimiento;
    if (mesActual < mesNacimiento) {
        edad--;
    } else if (mesActual === mesNacimiento) {
        if (diaActual < diaNacimiento) {
            edad--;
        }
    }
    return edad;
};

window.addEventListener('load', function () {

    fechaNacimiento.addEventListener('change', function () {
        if (this.value) {
            edad.value = `${calcularEdad(this.value)}`;
          if (edad.value <=17) {
      alert("debe ser mayor de edad");
    }if (edad.value >=18) {
    
       alert("su edad es aceptable");
    }
          }
       
    });
   

});
       </script>
       <script src="../js/correo.js"></script>
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