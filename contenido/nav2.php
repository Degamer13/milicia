<?php
require"../php/conexion.php";

session_start();
$id = $_SESSION["id"];
$cargo=4;
$consulta = "SELECT * FROM usuarios WHERE id = '$id' OR $cargo='cargo'";
$result = mysqli_query($conexion, $consulta);
$ejecute= $conexion->query($consulta);
$row= $result->fetch_assoc();
if (mysqli_num_rows($result) == 0) {
    echo"<script>
    alert('Por favor debe de iniciar sesión');
    window.location.href='../index.php';
</script>";
    // Si el id del usuario no existe en la base de datos, destruir la sesión
    session_destroy();
      // Cerrar la conexión con la base de datos
      mysqli_close($conexion);
}if (!$result=mysqli_query($conexion, $consulta)) {
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
}



    ?>

<nav class="sb-topnav navbar navbar-expand navbar-dark"  style="background-color: #2F4F4F;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Control Y Registro<img class="rounded float-end" src="../img/logo.png" alt="" width="35"></a>
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
                    <li><a class="dropdown-item" href="perfil2.php" >Perfil</a></li>
                    
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
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="home2.php">
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
                                    <a class="nav-link" href="registrar_persona2.php"><i class="bi bi-person-plus-fill"></i>Persona</a>
                                    <a class="nav-link" href="registro_familiar2.php"><i class="bi bi-people-fill"></i>Familiar</a>
                                    <a class="nav-link" href="registro_militar2.php"><i class="bi bi-person-fill"></i>Militar</a>
                                    <a class="nav-link" href="registro_salud1.php"><i class="bi bi-clipboard-plus-fill"></i>Salud y Otros</a>
                                    <a class="nav-link" href="registro_cursos1.php"><i class="bi bi-journals"></i>Cursos</a>
                                    <a class="nav-link" href="registro_tarea1.php"><i class="bi bi-journal-bookmark-fill"></i>Asignación de Tarea</a>
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
                                    <a class="nav-link" href="registros_militares2.php"><i class="bi-table"></i>Listados Militares</a>
                                   
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Reportes</div>
                            <a class="nav-link" href="generar_pdf2.php">
                                <div class="sb-nav-link-icon"></div>
                               <i class="bi-file-earmark-pdf-fill"></i>Generar Reportes
                               
                            </a>
                            
                          
                            
                            
                        </div>
                        
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="h6" style="text-transform: uppercase" >Usuario General: <b><?php echo $row['usuario'] ?></b></div>
                        
                    </div>
                </nav>
            </div>
            