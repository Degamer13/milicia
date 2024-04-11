
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registros De Usuarios</title>
        <link href="../css/datatables@latest_dist_style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
     <link rel="stylesheet" href="../css/bootstrap-icons.css">
     <link rel="Shortcut Icon" type="image/x-icon" href="../img/logo.png" />
<script src="../js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       <?php require'nav.php';?>
            
       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Registros De Usuarios</h1>
                        
                        <div class="card mb-4">
                            <div class="card-body">
                                Milicia Bolivariana donde el pueblo puede la patria se crece
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
                                            <th style="text-align: center;">USUARIO</th>
                                            <th style="text-align: center;">CORREO ELECTRONICO</th>
                                            <th style="text-align: center;">CARGO</th>
                                            <th style="text-align: center;">FECHA</th>
                                        
                                            <th style="text-align: center;">ACTUALIZAR</th>
                                            <th style="text-align: center;">ELIMINAR</th>
                                            
                                        </tr>
                                    </thead>
                                   <img src="" alt="">
                                    <tbody>
                                        <?php
                                        require"../php/conexion.php";

$queto= "SELECT * FROM usuarios u LEFT JOIN cargos c ON u.cargo=c.id_c WHERE u.cargo=c.id_c";
$result= mysqli_query($conexion, $queto);
while($fila = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>". $fila['nombre']. "</td>";
    echo "<td>". $fila['usuario']. "</td>";
        echo "<td>". $fila['correo']. "</td>";
    echo "<td>". $fila['descripcion']. "</td>";
   
    echo "<td>". $fila['fecha']. "</td>";


      echo "<td><a href='actualizar_usuario.php?id=".$fila['id']."' class='btn btn-primary btn-raised btn-xs'><i class='bi-pencil-fill'></i></a></td>";
      echo "<td><a  class='btn btn-danger btn-raised btn-xs' href='../php/eliminar.php?id=".$fila['id']."'>
      <i data-href='".$fila['id']."' class='bi-trash3-fill'></i></td>";
        
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
