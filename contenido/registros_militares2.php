<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registros Militares</title>
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
                        <h1 class="mt-4">Registros Militares</h1>
                        
                        <div class="card mb-4">
                            <div class="card-body">
                              Milicia Bolivariana donde el pueblo puede la patria se crece
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
                                            <th style="text-align: center;">NOMBRE Y APELLIDO</th>
                                            <th style="text-align: center;">CEDULA</th>
                                            <th style="text-align: center;">GENERO</th>
                                            <th style="text-align: center;">CORREO ELECTRONICO</th>
                                            
                                            <th style="text-align: center;">VISUALIZAR</th>
                                       
                                            <th style="text-align: center;">PDF</th>
                                            <th style="text-align: center;">QR</th>
                                        </tr>
                                    </thead>
                                   <img src="" alt="">
                                    <tbody>
                                        <?php
                                        require"../php/conexion.php";

$queto= "SELECT * FROM  persona";
$result= mysqli_query($conexion, $queto);
while($fila = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>". $fila['nombre1']. " ". $fila['apellido1']. "</td>";
    echo "<td>". $fila['cedula']. "</td>";
    echo "<td>". $fila['genero']. "</td>";
        echo "<td>". $fila['correo']. "</td>";
   
    
    echo "<td><a  href='vista_persona2.php?id_p=". $fila['id_p']. "' class='btn btn-primary btn-raised btn-xs'><i class='bi-eye-fill'></i></a></td>";

  
   
         echo "<td><a  target='_blank' href='pdf_militar.php?id_p=". $fila['id_p'] ."' class='btn btn-secondary btn-raised btn-xs'><i class='bi-file-earmark-pdf-fill'></i></a></td>";
         echo "<td><a  target='_blank' href='qr.php?id_p=". $fila['id_p'] ."' class='btn btn-info btn-raised btn-xs'><i class='bi bi-qr-code'></i></a></td>";
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
