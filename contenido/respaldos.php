
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registros De Backups</title>
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
                        <h1 class="mt-4">Registros De Backups</h1>
                        
                        <div class="card mb-4">
                            <div class="card-body">
                             Lista de respaldo de la base de datos "Militares".
                                
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="text-center">
                                     <thead >
                                     
                                        <tr> 
          <th style="text-align: center;">Numero</th> 
          <th style="text-align: center;">Nombre</th>
          <th style="text-align: center;">Descargar</th>
          <th style="text-align: center;">Eliminar</th>
        </tr> 
                                            
                                        </tr>
                                    </thead>
                                   <img src="" alt="">
                                    <tbody>
                                        <?php
                                       
                                        // Esto devolverá todos los archivos de esa carpeta
                                        $archivos = scandir("../backups");
                                        $num=0;
                                        for ($i=2; $i<count($archivos); $i++)
                                        {$num++;
                          
                                          echo "<tr>";
                             
                                   echo "<td>".$num."</td>";
                                  echo "<td>".$archivos[$i]."</td>";
                                  
                            
                             
                             
                                    echo "<td><a  href='../backups/".$archivos[$i]."' download='".$archivos[$i]."' > 
                                               <button type='submit' title='Descargar Archivo' class='btn btn-success'><i class='bi bi-download'></i></button></a></td>";
                              
                                   echo "<td><a title='Eliminar backup'  class='btn btn-danger' href='eliminar.php?name=../backups/".$archivos[$i]."'><i class='bi-trash3-fill'></i></td>";
                                  echo "</tr>";
                          }
                                       


?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                <?php require'footer.php';?>
</div>

      
       
<script src="../js/bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="../js/simple-datatables@latest.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
