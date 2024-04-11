
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Reportes</title>
        <link rel="Shortcut Icon" type="image/x-icon" href="../img/logo.png" />
        <link href="../css/datatables@latest_dist_style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
     <link rel="stylesheet" href="../css/bootstrap-icons.css">
<script src="../js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       <?php require'nav2.php';?>
       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Reportes</h1><br>                       
                        
    <div class="row">       
      <div class="col-md">        
          <div class="card text-center">
            <div class="card-body">
              <h2 class="card-title">Listado Militar</h2>
              <br><h1><i class="bi bi-file-earmark-pdf-fill"></i></h1> 
              <a href="generar.php" target="_blank" type="button" class="btn btn-primary">Generar PDF</a>
              <form method="POST" action="../php/create_excel.php">
				<button class="btn btn-success pull-right" name="export"><span class="glyphicon glyphicon-print"></span> Exportar a Excel</button>
			</form>
            </div>
          </div>          
      </div>

      <div class="col-md">        
          <div class="card text-center">
            <div class="card-body">
              <h2 class="card-title">Listado de Mujeres</h2>
              <br><h1><i class="bi bi-file-earmark-pdf-fill"></i></h1> 
              <a href="generar1.php" target="_blank"  type="button" class="btn btn-primary">Generar PDF</a>
              <form method="POST" action="../php/create_excel1.php">
				<button class="btn btn-success pull-right" name="export"><span class="glyphicon glyphicon-print"></span> Exportar a Excel</button>
			</form>
            </div>
          </div>          
      </div>
      <div class="col-md">        
          <div class="card text-center">
            <div class="card-body">
              <h2 class="card-title">Listado de Hombres</h2>
              <br><h1><i class="bi bi-file-earmark-pdf-fill"></i></h1> 
              <a href="generar2.php" target="_blank" type="button" class="btn btn-primary">Generar PDF</a>
              <form method="POST" action="../php/create_excel2.php">
				<button class="btn btn-success pull-right" name="export"><span class="glyphicon glyphicon-print"></span> Exportar a Excel</button>
			</form>
            </div>
          </div>          
      </div>
      
    </div>
    
                      
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
