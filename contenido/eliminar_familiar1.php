<?php 


session_start();
if(!isset($_SESSION['usuario'])){
echo"<script>
    alert('Por favor debe de iniciar sesión');
    window.location.href='../index.php';
</script>";
session_destroy();
die();
}



require"../php/conexion.php";
$id_f= $_GET['id_f'];
$query= "SELECT * FROM familia WHERE id_f= $id_f";
$result= mysqli_query($conexion, $query);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/styles.css" rel="stylesheet" />
     <link rel="stylesheet" href="../css/bootstrap-icons.css">
     <link rel="Shortcut Icon" type="image/x-icon" href="../img/logo.png" />
    <title>Eliminar Familiar</title>
</head>
<body>
    
<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container" >
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">¿Desea eliminar la cuenta del usuario?</h3></div>
                                    <div class="card-body">
                                        <center></center>
                                        <form  action="../php/eliminar_familiar1.php" method="POST" >
                                        <?php
 while($fila = mysqli_fetch_array($result)){
    echo" <center>
    <button type='submit' class='btn btn-primary btn-lg btn-block col-5' >Confirmar</button>
    <a href='registros_militares1.php' class='btn btn-secondary btn-lg btn-block col-5' >Cancelar</a>
    <input  type='hidden' name='id_f' value='".$id_f."'>
    </center> ";
}
?>
                                           
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
          
        </div>

</body>
</html>