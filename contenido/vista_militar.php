
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Vista Militar</title>
        <link href="../css/datatables@latest_dist_style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
     <link rel="stylesheet" href="../css/bootstrap-icons.css">
     <link rel="stylesheet" href="../css/vali.css">
     <link rel="stylesheet" href="../css/select2.min.css" />
     <style>
  a{
    text-decoration: none;
    font-family: sans-serif;
    color: #000;
   
  }
 </style>
    <link rel="stylesheet" href="../css/select2-bootstrap-5-theme.min.css" />
    <link rel="Shortcut Icon" type="image/x-icon" href="../img/logo.png" />
    <script src="../js/jquery.slim.min.js"></script>
    <script src="../js/select2.min.js"></script>
<script src="../js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       <?php require'nav.php';
       include('../php/conexion.php');    
       $id_p=$_GET["id_p"];
       $consulta= "SELECT * FROM  persona p  LEFT JOIN datos_militar d  ON d.id_mili=p.id_p LEFT JOIN adi_datos a ON d.adi=a.id_a LEFT JOIN region_tabla r ON a.id_adi=r.id_b LEFT JOIN zodi_tabla z ON r.id_region=z.id_c WHERE id_p='$id_p'";
      
$ejecute= $conexion->query($consulta);
$extraer= $ejecute->fetch_assoc(); 
       
       ?>
            
       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Registros de Datos</h1>
                        <center>
                        <a  href="vista_persona.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-person-plus-fill"></i>Persona</a> 
                        <a  href="vista_familiar.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-people-fill"></i>Familiar</a>
                        <a  href="vista_militar.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-person-fill"></i>Militar</a>
                        <a  href="vista_otros.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-clipboard-plus-fill"></i>Salud y Otros</a>
                        <a  href="vista_cursos.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-journals"></i>Cursos</a>
                        <a  href="vista_tarea.php?id_p=<?=$extraer['id_p']?>"><i class="bi bi-journal-bookmark-fill"></i>Asignación de Tarea</a>
                     
                        </center> 
                        </div>
    <form id="regForm" action="registros_militares.php" enctype="multipart/form-data" method="POST" class=" card bg bg-light" >


  <div class="tab" id="dynamicApp" >
  <h4 >Registro Militar</h4>
 
  <label class="col-sm-2 col-form-label">Seleccionar Zodi</label>
  <p><input type="text" disabled  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo $extraer['descripcion2'] ?>" name="zodi"></p>
      
          
          
      <label class="col-sm-2 col-form-label">Seleccionar Region</label>
      <p><input type="text" disabled oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo $extraer['descripcion1'] ?>" name="region"></p>
      
           
      <label class="col-sm-2 col-form-label">Seleccionar Adi</label>
      <p><input type="text"  disabled oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo $extraer['descripcion'] ?>" name="adi"></p>
      <label for="lastName" class="form-label">Grado/Jerarquia</label>
      <p><input type="text"  disabled oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo $extraer['jerarquia'] ?>" name="jerarquia"></p>
    
          
    <label for="lastName" class="form-label">Grado Instrucción</label>
    <p><input type="text" disabled oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo $extraer['instruccion'] ?>" name="instruccion"></p>
  
    
    <label for="lastName" class="form-label">Profesión</label>
    <p><input disabled  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo $extraer['profesion'] ?>" name="profesion"></p>
    <label for="lastName" class="form-label">Oficio</label>
    <p><input disabled oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="oficio" value="<?php echo $extraer['oficio'] ?>"></p>
    <label for="lastName" class="form-label">Misión Presidencial</label>
    <p><input disabled  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="mision" value="<?php echo $extraer['mision'] ?>"></p>
    <label for="country" class="form-label">Función o Condición</label>
     <p><input disabled oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="condicion" value="<?php echo $extraer['condicion'] ?>"></p>
       
         <br>
  </div>
  <div class="tab">
    
    <H4 >Registro de Militar Profesional</H4>
    <label for="country" class="form-label">Militar Profesional</label>
     
         <p><input disabled oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" name="militar_profesional" value="<?php echo $extraer['militar_profesional'] ?>"></p>
    <label for="lastName" class="form-label">Componente</label>
    <p><input disabled oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo $extraer['componente'] ?>" name="componente"></p>
    <label for="lastName" class="form-label">Grado</label>
    <p><input disabled oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo $extraer['grado'] ?>" name="grado"></p>
    <label for="lastName" class="form-label">Año de Graduación</label>
    <p><input disabled oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo $extraer['ano_graduacion'] ?>" name="ano_graduacion" type="number"></p>
    <label for="lastName" class="form-label">Año de Pase a Retiro</label>
    <p><input disabled oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo $extraer['ano_retiro'] ?>" name="ano_retiro" type="number"></p>
    <label for="country" class="form-label">Causa Pase a Retiro</label>
      
         <p><input disabled oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo $extraer['causa_retiro'] ?>" name="causa_retiro" type="text"></p>
      
         <br>
  </div>
 
  <div class="tab">
  <H4 >Registro de Servicio Militar</H4>
  <label for="country" class="form-label">Servicio Militar</label>
  <p><input disabled  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo $extraer['servicio_militar'] ?>" name="servicion_militar" type="text"></p>
       
    <label for="lastName" class="form-label">Contingente</label>
    <p><input  disabled type="text"  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo $extraer['contingente'] ?>" name="contingente"></p>
    
    <label for="lastName" class="form-label">Año de Licenciamiento</label>
    <p><input disabled type="number"  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo $extraer['ano_licenciamiento'] ?>" name="ano_licenciamiento"></p>
   
    <br>
  </div>
   
  <div class="tab">
  <H4>Registro de Uniforme</H4>
 
  <label for="country" class="form-label">Talla</label>
  <p><input type="text" disabled  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo $extraer['talla'] ?>" name="talla"></p>
       
      <label for="firstName" class="form-label">Calzado</label>
    <p><input type="number" disabled oninput="this.className = ''" name="calzado" value="<?php echo $extraer['calzado'] ?>"></p>
    <label for="firstName" class="form-label">Gorra</label>
    <p><input type="number" disabled oninput="this.className = ''" name="gorra" value="<?php echo $extraer['gorra'] ?>"></p>

    <label for="country" class="form-label">Unif. Caqui Completo</label>
    <p><input type="text" disabled  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo $extraer['unif_caqui'] ?>" name="unif_caqui"></p>
        
         <label for="country" class="form-label">Unif. Zamorano Completo</label>
         <p><input type="text" disabled  oninput="this.className = ''" onkeyup="this.value=this.value.toUpperCase();" value="<?php echo $extraer['unif_zamorano'] ?>" name="unif_zamorano"></p>
        
    <label for="firstName" class="form-label">Tiempo en la Milicia</label>
    <p><input type="text" disabled oninput="this.className = ''" name="tiempo_milicia" value="<?php echo $extraer['tiempo_milicia'] ?>"></p>
    <label for="firstName" class="form-label">Tiempo de Grado</label>
    <p><input type="text"  disabled oninput="this.className = ''" name="tiempo_grado" value="<?php echo $extraer['tiempo_grado'] ?>"></p>
    <label for="firstName" class="form-label">Año de Ascenso</label>
    <p><input type="text" disabled oninput="this.className = ''" name="ano_ultasce" value="<?php echo $extraer['ano_ultasce'] ?>"></p>
    
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
       <script src="../js/multi1.js"></script>
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
