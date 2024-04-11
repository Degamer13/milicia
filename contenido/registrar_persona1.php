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
 
<script src="../js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       <?php require'nav1.php';?>
            
       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Registro </h1>
                        
       
    </div>
    <form id="regForm" action="../php/persona1.php" enctype="multipart/form-data" method="POST" class=" card bg bg-light" >


  <div class="tab">
  <h4>Datos Personales:</h4>
  <label for="firstName" class="form-label">Fecha de Hoy</label>
  <input   type="date" name="fecha_registro" id="FechaActual" ><script>var fecha = new Date();
document.getElementById("FechaActual").value = fecha.toJSON().slice(0,10);</script>
  <label for="firstName" class="form-label">Primer Nombre</label>
    <p><input class="form-control" onkeyup="this.value=this.value.toUpperCase();"  oninput="this.className = ''" name="nombre1" required></p>
    <label for="lastName" class="form-label">Segundo Nombre</label>
    <p><input class="form-control" onkeyup="this.value=this.value.toUpperCase();"  oninput="this.className = ''" name="nombre2"required></p>
    <label for="firstName" class="form-label">Primer Apellido</label>
    <p><input class="form-control" onkeyup="this.value=this.value.toUpperCase();"  oninput="this.className = ''" name="apellido1" required></p>
    <label for="lastName" class="form-label">Segundo Apellido</label>
    <p><input class="form-control" onkeyup="this.value=this.value.toUpperCase();"  oninput="this.className = ''" name="apellido2" required></p>
    <label for="username" class="form-label">Cedula</label>
    <p><input class="form-control" type="number"  oninput="this.className = ''" name="cedula"   required ></p>
    <label for="telefono" class="form-label">Telefono</label>
    <p><input class="form-control" type="number"  oninput="this.className = ''" name="telefono" required></p>
    <label for="country" class="form-label">Genero</label>
              <select class="form-select" oninput="this.className = ''" name="genero" id="country" required>
                <option value="HOMBRE">HOMBRE</option>
                <option value="MUJER">MUJER</option>
              </select>
              <label for="country" class="form-label">Estado Civil</label>
              <select class="form-select" oninput="this.className = ''" name="estado_civil" id="country" required>
                <option value="SOLTERO">SOLTERO</option>
                <option value="CASADO">CASADO</option>
                <option value="DIVORSIADO">DIVORSIADO</option>
                <option value="CONCUBINATO">CONCUBINATO</option>	
                <option value="VIUDO">VIUDO</option>
               
              </select>
              <label for="telefono" class="form-label">Fecha de Nacimiento</label>
    <input class="form-control" data-provide="datepicker" type="date" id="fechaNacimiento" value="2000-09-13"  oninput="this.className = ''" name="fecha_nacimiento"  min="1930-01-01" max="2025-12-31" required>
    <label for="zip" class="form-label">Edad<h6 ></h6></label>
    <input class="form-control" type="number" oninput="this.className = ''" id="edad"  name="edad" >
  
    
    <label for="state" class="form-label">Posee Carnet de la Patria</label>
              <select class="form-select" oninput="this.className = ''" name="carnet_patria" id="state" required>
              
                <option value="NO">NO</option>
                <option value="SI">SI</option>
              </select>
              <label for="zip" class="form-label">Serial del Carnet</label>
    <p><input class="form-control" type="number" value="0" name="seriall" oninput="this.className = ''" ></p>
    <label for="zip" class="form-label">Codigo del Carnet</label>
    <p><input class="form-control" type="number"  value="0" oninput="this.className = ''" name="codigo" required></p>
    <label for="zip" class="form-label">Foto Del Miliciano(a)</label>
    <p><input class="form-control" type="file" oninput="this.className = ''" name="imagen" accept="image/*" required></p>
   
    
  </div>
  <div class="tab">
    <H4>Redes Sociales</H4>
    <label for="firstName" class="form-label">Correo ELectronico</label>
    <p><input placeholder="" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" type="email" id="email" name="correo"> <span id="email-validation-message"></span></p>
    <label for="lastName" class="form-label">Redes Sociales</label>
    <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="redes_sociales"></p>
    <label for="lastName" class="form-label">Religión</label>
    <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="religion"></p>
    <label for="lastName" class="form-label">Sector</label>
    <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="sector"></p>
    <label for="lastName" class="form-label">Dirección</label>
    <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="direccion"></p>
    
  </div>
 
  <div class="tab">
  <H4>Registro de Votaciones</H4>
  <label for="lastName" class="form-label">Unidad</label>
    <p><input type="text"  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="unidad"></p>
    <label for="lastName" class="form-label">Municipio</label>
    <p><input type="text"  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="municipio"></p>
    <label for="lastName" class="form-label">Parroquia</label>
    <p><input type="text"  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="parroquia"></p>
    <label for="lastName" class="form-label">Apdi</label>
    <p><input type="text"  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="apdi"></p>
    <label for="lastName" class="form-label">Bpdi</label>
    <p><input type="text"  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="bpdi"></p>
    <label for="lastName" class="form-label">Updi</label>
    <p><input type="text"  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="updi"></p>
   
   
  </div>
   
  <div class="tab">
  <H4>Registro Bancario</H4>
  <label for="control1" class="form-label">Seleccione un Banco</label> 
      <select class="form-select" oninput="this.className = ''"  id="cuenta" name="cuenta" required=""> 
       
          <option value="VENEZUELA">VENEZUELA</option> 
          <option value="BANFANB">BANFANB</option>
          <option value="BICENTENARIO">BICENTENARIO</option> 
          
      </select> 
      <label for="firstName" class="form-label">Numero De Cuenta</label>
    <p><input type="number" oninput="this.className = ''" name="numero_cuenta"></p>
    
    
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
    <p><input  name="empresa" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" type="text"></p>
    <label for="lastName" class="form-label">Dirección de la Empresa</label>
    <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="direccion1" type="text"></p>
    <label for="lastName" class="form-label">Telefono</label>
    <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="telefono1" type="number"></p>
    <label for="lastName" class="form-label">Cargo</label>
    <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="cargo1" type="text"></p>
 
   
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