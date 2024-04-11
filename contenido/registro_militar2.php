
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
    <script src="../js/jquery.slim.min.js"></script>
    <script src="../js/select2.min.js"></script>
<script src="../js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       <?php require'nav2.php';
       include('../php/conexion.php');     
       
       ?>
            
       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Registro</h1>

                        </div>
    <form id="regForm" action="../php/militar2.php" enctype="multipart/form-data" method="POST" class=" card bg bg-light" >


  <div class="tab" id="dynamicApp" >
  <h4 >Registro Militar</h4>
 
  <label class="col-sm-2 col-form-label">Seleccionar Zodi</label>
      <select class="form-select" v-model="select_country" @change="fetchState" name="zodi" >
       
       <option v-for="data in country_data" :value="data.id_c">{{ data.descripcion2 }}</option>
      </select>
          
          
      <label class="col-sm-2 col-form-label">Seleccionar Region</label>
      <select class="form-select" v-model="select_state" @change="fetchCity" name="region">
       
       <option v-for="data in state_data" :value="data.id_region">{{ data.descripcion1 }}</option>
      </select>
           
      <label class="col-sm-2 col-form-label">Seleccionar Adi</label>
      <select class="form-select" v-model="select_city" name="adi" >
      
       <option v-for="data in city_data" :value="data.id_a">{{ data.descripcion }}</option>
      </select>
      <label for="lastName" class="form-label">Grado/Jerarquia</label>
    <select class="form-select" id="country" name="jerarquia">
         <option value="MIL">MIL</option>
           <option value="SOLDADO">SOLDADO</option>
           <option value="DTGO">DTGO</option>
           <option value="C1">C1</option>
           <option value="C2">C2</option>
           <option value="S/1RO">S/1RO</option>
           <option value="S/2DO">S/2DO</option>
           <option value="SM/1RA">SM/1RA</option>
           <option value="SM/2DA">SM/2DA</option>
           <option value="SM/3RA">SM/3RA</option>
           <option value="SA">SA</option>
           <option value="SS">SS</option>
           <option value="TTE">TTE</option>
           <option value="PTTE">PTTE</option>
           <option value="CAP">CAP</option>
           <option value="MAY">MAY</option>
           <option value="TCNEL">TCNEL</option>
           <option value="CNEL">CNEL</option>
           <option value="AN">AN</option>
           <option value="TF">TF</option>
           <option value="TN">TN</option>
           <option value="CC">CC</option>
           <option value="CF">CF</option>
           <option value="CN">CN</option>
           <option value="PIE DE LUCHA">PIE DE LUCHA</option>
           
         </select>
   
    <label for="lastName" class="form-label">Grado Instrucción</label>
    <select class="form-select" name="instruccion">
         <option value="PRIMARIA">PRIMARIA</option>
           <option value="BACHILLER">BACHILLER</option>
           <option value="TSU">TSU</option>
           <option value="UNIVERSITARIO">UNIVERSITARIO</option>
           <option value="MAGISTER">MAGISTER</option>
           <option value="DOCTORADO">DOCTORADO</option>
           <option value="OTRO">OTRO</option>
          
           
         </select>
    
    <label for="lastName" class="form-label">Profesión</label>
    <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="profesion"></p>
    <label for="lastName" class="form-label">Oficio</label>
    <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="oficio"></p>
    <label for="lastName" class="form-label">Misión Presidencial</label>
    <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="mision"></p>
    <label for="country" class="form-label">Función o Condición</label>
         <select class="form-select" id="country" name="condicion">
         <option value="CMDT SEDI">CMDT SEDI</option>
           <option value="CMDT BPDI">CMDT BPDI</option>
           <option value="CMDT APDI">CMDT APDI</option>
           <option value="CMDT UPDI">CMDT UPDI</option>
           <option value="PIE DE LUCHA">PIE DE LUCHA</option>
          
         </select>
         <br>
  </div>
  <div class="tab">
    
    <H4 >Registro de Militar Profesional</H4>
    <label for="country" class="form-label">Militar Profesional</label>
         <select class="form-select" name="militar_profesional">
         
           
           <option value="NO">NO</option>
           <option value="SI">SI</option>
           
         </select>
    <label for="lastName" class="form-label">Componente</label>
    <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="0" name="componente"></p>
    <label for="lastName" class="form-label">Grado</label>
    <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="0" name="grado"></p>
    <label for="lastName" class="form-label">Año de Graduación</label>
    <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="0" name="ano_graduacion" type="number"></p>
    <label for="lastName" class="form-label">Año de Pase a Retiro</label>
    <p><input  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="0" name="ano_retiro" type="number"></p>
    <label for="country" class="form-label">Causa Pase a Retiro</label>
         <select class="form-select" id="country" name="causa_retiro">
          <option value="0">0</option>
         <option value="TIEMPO DE SERVICIO
">TIEMPO DE SERVICIO
</option>
           <option value="PROPIA SOLICITUD
">PROPIA SOLICITUD
</option>
           <option value="MEDIDA DISCIPLINARIA
">MEDIDA DISCIPLINARIA
</option>
           
           
           
         </select>
         <br>
  </div>
 
  <div class="tab">
  <H4 >Registro de Servicio Militar</H4>
  <label for="country" class="form-label">Servicio Militar</label>
         <select class="form-select" name="servicio_militar">
         
           <option value="SI">SI</option>
           <option value="NO">NO</option>
           
           
         </select>
  
    <label for="lastName" class="form-label">Contingente</label>
    <p><input type="text"  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="contingente"></p>
    
    <label for="lastName" class="form-label">Año de Licenciamiento</label>
    <p><input type="number"  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="ano_licenciamiento"></p>
   
    <br>
  </div>
   
  <div class="tab">
  <H4>Registro de Uniforme</H4>
 
  <label for="country" class="form-label">Talla</label>
         <select class="form-select" id="country"  name="talla">
         
           <option value="XSS">XSS</option>
           <option value="SS">SS</option>
           <option value="SR">SR</option>
           <option value="SL">SL</option>
           <option value="MR">MR</option>
           <option value="MS">MS</option>
           <option value="ML">ML</option>
           <option value="LR">LR</option>
           <option value="XL">XL</option>
           <option value="XXL">XXL</option>
         </select>
      <label for="firstName" class="form-label">Calzado</label>
    <p><input type="number" oninput="this.className = ''" name="calzado"></p>
    <label for="firstName" class="form-label">Gorra</label>
    <p><input type="number" oninput="this.className = ''" name="gorra"></p>

    <label for="country" class="form-label">Unif. Caqui Completo</label>
         <select class="form-select" id="country"  name="unif_caqui">
         
           <option value="SI">SI</option>
           <option value="NO">NO</option>
           
         </select>
         <label for="country" class="form-label">Unif. Zamorano Completo</label>
         <select class="form-select" id="country"  name="unif_zamorano">
         
           <option value="SI">SI</option>
           <option value="NO">NO</option>
           
         </select>
    <label for="firstName" class="form-label">Tiempo en la Milicia</label>
    <p><input type="text" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"  name="tiempo_milicia"></p>
    <label for="firstName" class="form-label">Tiempo de Grado</label>
    <p><input type="text" oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();"  name="tiempo_grado"></p>
    <label for="firstName" class="form-label">Año de Ascenso</label>
    <p><input type="number" oninput="this.className = ''" name="ano_ultasce"></p>
    <label for="lastName" class="form-label">Seleccione la cedula del militar</label>
    <select class="form-select" id="single-select-field" data-placeholder="Buscar Cedula"
      name="id_mili"  oninput="this.className = ''"> 
    <?php  
  
  $queru="SELECT * FROM persona"; 
  $resultadu=mysqli_query($conexion, $queru); ?> 
  
   
    
      <?php 
        while($listo=mysqli_fetch_array($resultadu)) 
        echo "<option  style='font-family:Helvetica;'' value='".$listo["id_p"]."'>".$listo["nombre1"]." ".$listo["apellido1"]." ".$listo["cedula"]."</option>";  
      ?> 
       </select> 
       <br>
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
    
  </div>
</form>

                </main>
                <?php require'footer.php';?>
    
       <script src="../js/vue.js"></script>
  <script src="../js/axios.min.js"></script>

 
       <script src="../js/buscar.js"></script>
       <script src="../js/multi.js"></script>
        <script src="../js/bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="../js/simple-datatables@latest.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>


        <script>

var application = new Vue({
 el:'#dynamicApp',
 data:{
  select_country:'',
  country_data:'',
  select_state:'',
  state_data:'',
  select_city:'',
  city_data:''
 },
 methods:{
  fetchCountry:function(){
   axios.post("../php/action.php", {
    request_for:'country'
   }).then(function(response){
    application.country_data = response.data;
    application.select_state = '';
    application.state_data = '';
    application.select_city = '';
    application.city_data = '';
   });
  },
  fetchState:function(){
   axios.post("../php/action.php", {
    request_for:'state',
    id_region:this.select_country
   }).then(function(response){
    application.state_data = response.data;
    application.select_state = '';
    application.select_city = '';
    application.city_data = '';
   });
  },
  fetchCity:function(){
   axios.post("../php/action.php", {
    request_for:'city', 
    id_adi:this.select_state
   }).then(function(response){
    application.city_data = response.data;
    application.select_city = '';
   });
  }
 },
 created:function(){
  this.fetchCountry();
 }
});

</script>
    </body>
</html>
