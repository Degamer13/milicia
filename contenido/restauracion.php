
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Restauración de Base de Datos</title>
        <link rel="stylesheet" href="..css/form-validation.css">
        <link href="../css/datatables@latest_dist_style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
     <link rel="stylesheet" href="../css/bootstrap-icons.css">
     <link rel="stylesheet" href="../css/select2.min.css" />
     <link rel="Shortcut Icon" type="image/x-icon" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
   

    <!-- Scripts -->    
<script src="../js/jquery.slim.min.js"></script>
    <script src="../js/select2.min.js"></script>

<script src="../js/all.min.js" crossorigin="anonymous"></script>

    </head>
    <body class="sb-nav-fixed">
       <?php require'nav.php';?>
            
       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Restauración de Base de Datos</h1>
                        
    <div class="card bg-light" style="margin: 10px; ">
      
        <form class="needs-validation" novalidate style="margin: 20px; " action="../php/Restore.php" method="POST">
          <div class="container">
          

            <div class="col-12">
            <label class="form-label">Selecciona un punto de restauración</label><br>
		<select class="form-select" name="restorePoint"  id="single-select-field" required>
			<option value="" disabled="" selected="">Selecciona un punto de restauración</option>
			<?php
				include_once '../php/Connet.php';
				$ruta=BACKUP_PATH;
				if(is_dir($ruta)){
				    if($aux=opendir($ruta)){
				        while(($archivo = readdir($aux)) !== false){
				            if($archivo!="."&&$archivo!=".."){
				                $nombrearchivo=str_replace(".sql", "", $archivo);
				                $nombrearchivo=str_replace("-", ":", $nombrearchivo);
				                $ruta_completa=$ruta.$archivo;
				                if(is_dir($ruta_completa)){
				                }else{
				                    echo '<option value="'.$ruta_completa.'">'.$nombrearchivo.'</option>';
				                }
				            }
				        }
				        closedir($aux);
				    }
				}else{
				    echo $ruta." No es ruta válida";
				}
			?>
		</select>
        

            
        <div class="invalid-feedback">
              Campo Requerido.
              </div>
            </div>
       
          
          

          <hr class="my-4">

          <button class=" btn btn-primary btn-lg col-12" type="submit">Subir</button>
        </form>
      </div>
    </div>
                    
                        
                    </div>             
</main>

<script src="../js/buscar.js"></script>
<script src="../js/all.min.js" crossorigin="anonymous"></script>
<script src="../js/form-validation.js"></script>
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

