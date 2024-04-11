<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Acciones de Backups</title>
        <link rel="Shortcut Icon" type="image/x-icon" href="../img/logo.png" />
        <link href="../css/datatables@latest_dist_style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
     <link rel="stylesheet" href="../css/bootstrap-icons.css">
<script src="../js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       <?php require'nav.php';?>
       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Acciones de Backups</h1><br>                       
                        
                        <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Respaldar Base de Datos</h5>
       <center>
       <h1><i class="Heading bi bi-cloud-arrow-down-fill"></i></h1>
        <a href="../php/Backup.php" class="btn btn-primary">Respaldar</a>
       </center>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Eliminar Backups Almacenados</h5>
       <center>
       
        <h1><i class="bi bi-clouds-fill"></i></h1>
        <a href="respaldos.php" class="btn btn-primary">Visualizar</a>
        </center>
      </div>
    </div>
  </div>

  </div>
  

    <div class="row">
  
  
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Restaurar Base de Datos </h5>
        <center>
          <h1><i class="bi bi-cloud-upload-fill"></i></h1>
        
        <a href="restauracion.php" class="btn btn-primary">Restaurar</a>
        </center>
      </div>
    </div>
  </div>

  <!--
<div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Eliminar Base de Datos</h5>
      <center>
        <h1><i class="bi bi-cloud-slash-fill"></i></h1>
        <a href="../php/delete_base.php" onclick="return confirm('Seguro que desea borrar la base de datos y crearla desde cero');" class="btn btn-primary">Eliminar</a>
      </center>
        
      </div>
    </div>
  </div>
    </div>
    
  <br>-->


  

    
                      
                </main>
    
       <?php require'footer.php';?>
        <script src="../js/bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="../js/simple-datatables@latest.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
