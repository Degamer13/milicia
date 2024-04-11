
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Vista Familiares</title>
        <link rel="Shortcut Icon" type="image/x-icon" href="../img/logo.png" />
        <link href="../css/datatables@latest_dist_style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
     <link rel="stylesheet" href="../css/bootstrap-icons.css">
     <style>
  a{
    text-decoration: none;
    font-family: sans-serif;
    color: #000;
   
  }
 </style>
<script src="../js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       <?php require'nav1.php';
       
       
       ?>
            
       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Registros De Familiares</h1>
                        
                        <div class="card mb-4">
                            <div class="card-body">
                            <center>
                            <a  href="registros_militares1.php"><i class="bi bi-box-arrow-left"></i>Salir de Vista Familiar</a> 
                      
                     
                        </center> 
                            </div>
                        </div>
                
                      
                        <br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="text-center">
                                     <thead >
                                        <tr>
                                        <th style="text-align: center;">PARENTESCO</th>
                                            <th style="text-align: center;">CEDULA</th>
                                            <th style="text-align: center;">NOMBRE Y APELLIDO</th>
                                            <th style="text-align: center;">TELEFONO</th>
                                            <th style="text-align: center;">OCUPACION</th>
                                        
                                            
                                            
                                        </tr>
                                    </thead>
                                   <img src="" alt="">
                                    <tbody>
                                        <?php
                                        require"../php/conexion.php";
                                        $id_p =$_GET['id_p'];

$queto= "SELECT * FROM persona p LEFT JOIN familia f ON f.id_familia=p.id_p WHERE id_p=$id_p";
$result= mysqli_query($conexion, $queto);
while($fila = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>". $fila['parentesco']. "</td>";
    echo "<td>". $fila['cedula1']. "</td>";
        echo "<td>". $fila['nombref']. "</td>";
    echo "<td>". $fila['telefono2']. "</td>";
    echo "<td>". $fila['ocupacion']. "</td>";
     
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


        <script src="../js/simple-datatables@latest.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
