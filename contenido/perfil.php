<?php
require"../php/conexion.php";

session_start();
$id = $_SESSION["id"];
$cargo=4;
$cargo1=3;
$cargo2=2;
$consulta = "SELECT * FROM usuarios u LEFT JOIN cargos c ON u.cargo=c.id_c LEFT JOIN preguntas p ON p.id_user=u.id WHERE id='$id' OR $cargo='cargo' OR $cargo1='cargo' OR $cargo2='cargo'";
$result = mysqli_query($conexion, $consulta);
$ejecute= $conexion->query($consulta);
$extraer= $result->fetch_assoc();
if (mysqli_num_rows($result) == 0) {
    echo"<script>
    alert('Por favor debe de iniciar sesión');
    window.location.href='../index.php';
</script>";
    // Si el id del usuario no existe en la base de datos, destruir la sesión
    session_destroy();
      // Cerrar la conexión con la base de datos
      mysqli_close($conexion);
}
if (!$result=mysqli_query($conexion, $consulta)) {
	echo("Error description:".mysqli_error($conexion));
}

$filas=mysqli_fetch_array($result, MYSQLI_ASSOC);

$result1 = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($result1) > 0) {

if ($filas["cargo"]==4){
	?><script>
    alert("eL usuario se encuentra deshabilitado");
    window.location.href="../index.php";
</script><?php

  // Si el id del usuario no existe en la base de datos, destruir la sesión
  session_destroy();
  // Cerrar la conexión con la base de datos
  mysqli_close($conexion);
}
if ($filas["cargo"]==3){
	?><script>
    alert("No posee los permisos necesarios");
    window.location.href="../index.php";
</script><?php

  // Si el id del usuario no existe en la base de datos, destruir la sesión
  session_destroy();
  // Cerrar la conexión con la base de datos
  mysqli_close($conexion);
}if ($filas["cargo"]==2){
	?><script>
    alert("No posee los permisos necesarios");
    window.location.href="../index.php";
</script><?php

  // Si el id del usuario no existe en la base de datos, destruir la sesión
  session_destroy();
  // Cerrar la conexión con la base de datos
  mysqli_close($conexion);
}
}


    ?>





<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Perfil</title>
        <link rel="Shortcut Icon" type="image/x-icon" href="../img/logo.png" />
        <link href="../css/datatables@latest_dist_style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
     <link rel="stylesheet" href="../css/bootstrap-icons.css">
<script src="../js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark"  style="background-color: #2F4F4F;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Control Y Registro <img class="rounded float-end" src="../img/logo.png" alt="" width="35"></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="hidden" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                   
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="perfil.php" >Perfil</a></li>
                    
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Cerrar Sesión</a></li>
                       
                    </ul>
                </li>

            </ul>
            
        </nav>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <center class="h5"><b>¿DESEAS FINALIZAR LA SESIÓN? </b></center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <a href="../php/cerrrar.php" type="button" class="btn btn-primary">Confirmar</a>
       
      </div>
    </div>
  </div>
</div>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark"  id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu </div>
                            <a class="nav-link" href="home.php">
                                <div class="sb-nav-link-icon"></div>
                               <i class="bi-house-fill"></i> Inicio
                            </a>
                            <div class="sb-sidenav-menu-heading">Formularios</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"></div>
                               <i class="bi-journals"></i> Registrar
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="registrar_persona.php"><i class="bi bi-person-plus-fill"></i>Persona</a>
                                    <a class="nav-link" href="registro_familiar.php"><i class="bi bi-people-fill"></i>Familiar</a>
                                    <a class="nav-link" href="registro_militar.php"><i class="bi bi-person-fill"></i>Militar</a>
                                    <a class="nav-link" href="registro2.php"><i class="bi bi-clipboard-plus-fill"></i>Salud y Otros</a>
                                    <a class="nav-link" href="cursos1.php"><i class="bi bi-journals"></i>Cursos</a>
                                    <a class="nav-link" href="tarea.php"><i class="bi bi-journal-bookmark-fill"></i>Asignación de Tarea</a>
                                </nav>
                            </div>
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutss" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"></div>
                                <i class="bi-people-fill"></i> Usuarios
                                <div class="sb-sidenav-collapse-arrow"></div>
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutss" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="usuario.php"><i class="bi-person-plus-fill"></i> Nuevo Usuario</a>
                                    <a class="nav-link" href="registros_usuarios.php"><i class="bi-table"></i>Lista Usuarios</a>
                                </nav>
                            </div>
                      
                            <div class="sb-sidenav-menu-heading">Registros</div>
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutst" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"></div>
                                <i class="bi-people-fill"></i>Registros Militares
                                <div class="sb-sidenav-collapse-arrow"></div>
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutst" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="registros_militares.php"><i class="bi-table"></i>Listados Militares</a>
                                    <a class="nav-link" href="estadisticas.php"><i class="bi-graph-up"></i>Estadisticas</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Reportes Y Backuds</div>
                            <a class="nav-link" href="generar_pdf.php">
                                <div class="sb-nav-link-icon"></div>
                               <i class="bi-file-earmark-pdf-fill"></i>Generar Reportes
                               
                            </a>
                            
                            <a class="nav-link" href="generar_backups.php">
                                <div class="sb-nav-link-icon"></div>
                               <i class="bi-cloud-upload-fill"></i>Acciones de Backuds
                               
                            </a>
                        
                            
                            
                            
                        </div>
                        
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="h6" style="text-transform: uppercase" >Super Usuario: <b><?php echo $extraer['usuario'] ?></b></div>
                        
                    </div>
                </nav>
            </div>
            
            <!--  aqui acaba -->
             
            
       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Perfil de Usuario</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Datos de Usuario</li>
                        </ol>
                        
   
       <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Perfil</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Preguntas</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Actualizar Perfil</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pollo-tab" data-bs-toggle="tab" data-bs-target="#pollo" type="button" role="tab" aria-controls="pollo" aria-selected="false">Actualizar Preguntas</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><div class="row">
    <div class="col-md-6 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Información General</span>
     
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item list-group-item bg-light">
          <div>
            <h6 >Datos Del Perfil Del Usuario</h6>
            <p style="text-align:justify;">En la sección actual podra visualizar sus datos del perfil que usted posee en la aplicación wed</p> 
          </div>
        </li>
      
       
      </ul>

      
    </div>

    <div class="col-md-6 order-md-1 bg-light">
      <br>
      <h4 class="mb-3">Datos Del Usuario</h4>
      <form class="needs-validation" method="POST" action="php/datos_persona.php" novalidate>
       
        <div class="mb-3">
          <label for="name">Nombre Completo </label>
          <input type="text" disabled class="form-control" id="name" value="<?php echo $extraer['nombre'] ?>" placeholder="Escribir su nombre y apellido"  name="nombres" required>
          <div class="invalid-feedback">
           El campo nombres y apellidos es requerido
          </div>
        </div>
          <div class="mb-3">
          <label for="email">Correo Electronico</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="email" disabled class="form-control" id="email" value="<?php echo $extraer['correo'] ?>" placeholder="you@example.com" name="correo" required>
            <div class="invalid-feedback" >
             El campo correo electronico es requerido
            </div>
          </div>
        </div>
         <div class="mb-3">
          <label for="usuario">Usuario</label>
          <div class="input-group">
           
            <input type="text" disabled class="form-control" id="Usuario" value="<?php echo $extraer['usuario'] ?>"   name="usuario" required>
            <div class="invalid-feedback" >
             El campo Usuario es requerido
            </div>
          </div>
        </div>
         <div class="mb-3">
          <label for="email">Cargo</label>
          <div class="input-group">
           
            <input type="text" disabled class="form-control" id="cargo" value="<?php echo $extraer['descripcion']

           

  
?>"  name="cargo" required>
            <div class="invalid-feedback" >
             El campo correo electronico es requerido
            </div>
        </div>
    </div>

             <div class="mb-3">
          <label for="fecha">Fecha De Registro</label>
          <div class="input-group">
            
            <input type="text" disabled class="form-control" id="email" placeholder="you@example.com" value="<?php echo $extraer['fecha']

           

  
?>" name="correo" required>
            <div class="invalid-feedback" >
             El campo correo electronico es requerido
            </div>
          

       
        
        
     
          
         
          
          </div>
        </div>
        


        
         
       
     
        <br>
      </form>
    </div>
  </div>

  
</div>
      
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><div class="row">
    <div class="col-md-6 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Información General</span>
     
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item list-group-item bg-light">
          <div>
            <h6 >Registro De Preguntas De Seguridad</h6>
             <p style="text-align:justify;">En esta sección deberás de registrar tres preguntas de seguridad, con sus respuestas, para una futura recuperación de contraseña.</p>
          </div>
        </li>
      
       

      </ul>

      
    </div>
    <div class="col-md-6 order-md-1 bg-light">
      <br>
      <h4 class="mb-3">Registrar Preguntas De Seguridad</h4>
      <form class="needs-validation" method="POST" action="../php/pregunta.php" novalidate>
       
        <div class="mb-3">
          <label for="pregunta1">Primera Pregunta</label>
          <div class="input-group">
            
             <select class="form-select d-block w-100" id="pregunta1" name="pregunta1" required>
             <option value="">SELECCIONE UNA OPCIÓN</option>
          <option value="NOMBRE DE MI MADRE">NOMBRE DE MI MADRE</option>
              <option value="NOMBRE DE MI PADRE">NOMBRE DE MI PADRE</option>
              <option value="COMIDA FAVORITA">COMIDA FAVORITA</option>
              <option value="COLOR FAVORITO">COLOR FAVORITO</option>
              <option value="NOMBRE DE MI MASCOTA">NOMBRE DE MI MASCOTA</option>
            </select>
            <div class="invalid-feedback" >
            Campo Requerido.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="respuesta1">Respuesta</label>
          <input type="text" class="form-control" id="respuesta1"  placeholder="Escribir la respuesta" name="respuesta1" required>
          <div class="invalid-feedback">
          Campo Requerido.
          </div>
        </div>

        <div class="mb-3">
          <label for="pregunta2">Segundad Pregunta</label>
         <select class="form-select d-block w-100" id="pregunta2" name="pregunta2" required>
         <option value="">SELECCIONE UNA OPCIÓN</option>
          <option value="NOMBRE DE MI MADRE">NOMBRE DE MI MADRE</option>
              <option value="NOMBRE DE MI PADRE">NOMBRE DE MI PADRE</option>
              <option value="COMIDA FAVORITA">COMIDA FAVORITA</option>
              <option value="COLOR FAVORITO">COLOR FAVORITO</option>
              <option value="NOMBRE DE MI MASCOTA">NOMBRE DE MI MASCOTA</option>
            </select>
          <div class="invalid-feedback">
          Campo Requerido.
          </div>
        </div>
        <div class="mb-3">
            <label for="respuesta2">Respuesta</label>
            <input type="text" class="form-control" id="respuesta2"  placeholder="Escribir la respuesta" name="respuesta2" required>
          
            <div class="invalid-feedback">
            Campo Requerido.
          </div>
          </div>
            <div class="mb-3">
          <label for="pregunta3">Tercera Pregunta</label>
          <select class="form-select d-block w-100" id="pregunta3" name="pregunta3" required>
          <option value="">SELECCIONE UNA OPCIÓN</option>
          <option value="NOMBRE DE MI MADRE">NOMBRE DE MI MADRE</option>
              <option value="NOMBRE DE MI PADRE">NOMBRE DE MI PADRE</option>
              <option value="COMIDA FAVORITA">COMIDA FAVORITA</option>
              <option value="COLOR FAVORITO">COLOR FAVORITO</option>
              <option value="NOMBRE DE MI MASCOTA">NOMBRE DE MI MASCOTA</option>
            </select>
          <div class="invalid-feedback">
          Campo Requerido.
          </div>
        </div>
        
        <div class="mb-3">
          <label for="respuesta3">Respuesta</label>
          <input type="text" class="form-control" id="respuesta3"  placeholder="Escribir la respuesta" name="respuesta3" required>
             <div class="invalid-feedback">
             Campo Requerido.
          </div>
        </div>
         <input type="hidden" class="form-control" id="id_user"  name="id_user" value="<?php echo $extraer['id'];?>">
          
         
        
           
         
          
        
   
   
         
        


        
         
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block"  type="submit">Registrar</button>
        <br>
      </form>
    </div>
  </div>
</div>
    
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  <div class="row">
    <div class="col-md-6 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Información General</span>
     
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item list-group-item bg-light">
          <div>
            <h6 >Indicaciones Para El Registro</h6>
             <p style="text-align:justify;">En esta sección podras cambiar los datos de su perfil.</p>
          </div>
        </li>
      

      </ul>

      
    </div>
    <div class="col-md-6 order-md-1 bg-light">
      <br>
    <h4 class="mb-3">Editar Usuario</h4>


      <form class="needs-validation" method="POST" onsubmit="return validarContraseña()" action="../php/actualizar_perfil.php?id=<?=$extraer['id']?>" novalidate >
       
        <div class="mb-3">
          <label for="name">Nombre Completo</label>
          <input type="text"  class="form-control" id="name" value="<?php echo $extraer['nombre'] ?>" onkeyup="this.value=this.value.toUpperCase();" placeholder="Escribir su nombre y apellido"  name="nombre" required>
          <div class="invalid-feedback">
          Campo Requerido.
          </div>
        </div>
          <div class="mb-3">
          <label for="email">Correo Electronico</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="email"  class="form-control" id="email" value="<?php echo $extraer['correo'] ?>" placeholder="you@example.com" name="correo" onkeyup="this.value=this.value.toUpperCase();" required>
            <div class="invalid-feedback" >
            Campo Requerido.
            </div>
          </div>
        </div>
         <div class="mb-3">
          <label for="usuario">Usuario</label>
          <div class="input-group">
           
            <input type="text"  class="form-control" id="usuario" value="<?php echo $extraer['usuario'] ?>"   name="usuario"  required >
            <div class="invalid-feedback" >
            Campo Requerido.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="usuario">Contraseña</label>
          <div class="input-group">
           
            <input type="password"  maxlength="15" minlength="8" id="contraseña" class="form-control" id="clave" name="clave" placeholder="Escribir nueva contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+~`|}{\[\]\\:';/?.><,-])(?=.*[a-zA-Z]).{8,15}"  required>
            <div class="invalid-feedback" >
            Campo Requerido.
            </div>
          </div>
        </div>
         <div class="mb-3">
          <label for="cargo">Cargo</label>
          <select class="form-select d-block w-100" id="cargo" name="cargo" required>
              
                    
                     
                      <option value="<?php echo $extraer['cargo'] ?>"  class="form-control"><?php echo $extraer['descripcion'] ?></option> 
                      <option value="1">SUPER USUARIO</option>
                <option value="2">ADMINISTRADOR</option>
                <option value="3">USUARIO GENERAL</option>
                
                               
            </select>
          <div class="invalid-feedback">
          Campo Requerido.
          </div>
        </div>
             <div class="mb-3">
          <label for="fecha">Fecha De Actualización</label>
          <div class="input-group">
            
            <input type="date"  class="form-control" id="fecha"  name="fecha" value="<?php echo $extraer['fecha']

           

  
?>" required>
            <div class="invalid-feedback" >
            Campo Requerido.
            </div>
          

       
        
        
     
          
         
          
          </div>
        </div>
        


        
         
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Actualizar</button>
        <br>
      </form>
    </div>
  

      </div>
  </div>
  <div class="tab-pane fade" id="pollo" role="tabpanel" aria-labelledby="pollo-tab"><div class="row">
    <div class="col-md-6 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Información General</span>
     
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item list-group-item bg-light">
          <div>
            <h6 >Editar Preguntas De Seguridad</h6>
             <p style="text-align:justify;">En esta sección podras actualizar las tres preguntas de seguridad, con sus respuestas, para una futura recuperación de contraseña.</p>
          </div>
        </li>
      
       

      </ul>

      
    </div>
    <div class="col-md-6 order-md-1 bg-light">
      <br>
      <h4 class="mb-3">Editar Preguntas De Seguridad</h4>
      <form class="needs-validation" method="POST" action="../php/actualizar_preguntas.php?id_r=<?=$extraer['id_r']?>" novalidate>
       
        <div class="mb-3">
          <label for="pregunta1">Primera Pregunta</label>
          <div class="input-group">
            
             <select class="form-select d-block w-100" id="pregunta1" name="pregunta1" required>
             <option value="">SELECCIONE UNA OPCIÓN</option>
          <option value="NOMBRE DE MI MADRE">NOMBRE DE MI MADRE</option>
              <option value="NOMBRE DE MI PADRE">NOMBRE DE MI PADRE</option>
              <option value="COMIDA FAVORITA">COMIDA FAVORITA</option>
              <option value="COLOR FAVORITO">COLOR FAVORITO</option>
              <option value="NOMBRE DE MI MASCOTA">NOMBRE DE MI MASCOTA</option>
            </select>
            <div class="invalid-feedback" >
            Campo Requerido.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="respuesta1">Respuesta</label>
          <input type="text" class="form-control" id="respuesta1"  placeholder="Escribir la respuesta" name="respuesta1" required>
          <div class="invalid-feedback">
           Campo Requerido.
          </div>
        </div>

        <div class="mb-3">
          <label for="pregunta2">Segundad Pregunta</label>
         <select class="form-select d-block w-100" id="pregunta2" name="pregunta2" required>
         <option value="">SELECCIONE UNA OPCIÓN</option>
          <option value="NOMBRE DE MI MADRE">NOMBRE DE MI MADRE</option>
              <option value="NOMBRE DE MI PADRE">NOMBRE DE MI PADRE</option>
              <option value="COMIDA FAVORITA">COMIDA FAVORITA</option>
              <option value="COLOR FAVORITO">COLOR FAVORITO</option>
              <option value="NOMBRE DE MI MASCOTA">NOMBRE DE MI MASCOTA</option>
            </select>
          <div class="invalid-feedback">
          Campo Requerido.
          </div>
        </div>
        <div class="mb-3">
            <label for="respuesta2">Respuesta</label>
            <input type="text" class="form-control" id="respuesta2"  placeholder="Escribir la respuesta" name="respuesta2" required>
          
            <div class="invalid-feedback">
            Campo Requerido.
          </div>
          </div>
            <div class="mb-3">
          <label for="pregunta3">Tercera Pregunta</label>
          <select class="form-select d-block w-100" id="pregunta3" name="pregunta3" required>
               <option value="">Seleccione Una Opción</option>
               <option value="">SELECCIONE UNA OPCIÓN</option>
          <option value="NOMBRE DE MI MADRE">NOMBRE DE MI MADRE</option>
              <option value="NOMBRE DE MI PADRE">NOMBRE DE MI PADRE</option>
              <option value="COMIDA FAVORITA">COMIDA FAVORITA</option>
              <option value="COLOR FAVORITO">COLOR FAVORITO</option>
              <option value="NOMBRE DE MI MASCOTA">NOMBRE DE MI MASCOTA</option>
            </select>
          <div class="invalid-feedback">
          Campo Requerido.
          </div>
        </div>
        
        <div class="mb-3">
          <label for="respuesta3">Respuesta</label>
          <input type="text" class="form-control" id="respuesta3"  placeholder="Escribir la respuesta" name="respuesta3"  required>
             <div class="invalid-feedback">
             Campo Requerido.
          </div>
        </div>
         <input type="hidden" class="form-control" id="id_user"  name="id_user" value="<?php echo $extraer['id'];

           

  
?>">
          
         
        
           
         
          
        
   
   
         
        


        
         
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block"  type="submit">Actualizar</button>
        <br>
      </form>
    </div>
  </div>
</div>
    

</div>
     
                 
      </div>

      
      
    
                      
                </main>
    
       <?php require'footer.php';?>
       <script src="../js/vali_clave.js" crossorigin="anonymous"></script>
       <script src="../js/form-validation.js"></script>
        <script src="../js/bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="../js/simple-datatables@latest.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>

