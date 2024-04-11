<?php
require"../php/conexion.php";

session_start();
$id = $_SESSION["id"];
$consulta = "SELECT * FROM usuarios WHERE id = '$id'";
$result = mysqli_query($conexion, $consulta);
$ejecute= $conexion->query($consulta);
$row= $result->fetch_assoc();
if(!isset($_SESSION['id'])){
echo"<script>
    alert('Por favor debe de iniciar sesión');
    window.location.href='../index.php';
</script>";
session_destroy();
die();
}else{
    if (mysqli_num_rows($result) == 0) {
        // Si el id del usuario no existe en la base de datos, destruir la sesión
        session_destroy();
    }
    
    // Cerrar la conexión con la base de datos
    mysqli_close($conexion);
}
$id= $_GET['id'];
$query= "SELECT * FROM usuarios WHERE id= $id";
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
    <title>Eliminar</title>
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
                                        <form  action="../php/eliminar.php" method="POST" >
                                        <?php
 while($fila = mysqli_fetch_array($result)){
    echo" <center>
    <button type='submit' class='btn btn-primary btn-lg btn-block col-5' >Confirmar</button>
    <a href='registros_usuarios.php' class='btn btn-secondary btn-lg btn-block col-5' >Cancelar</a>
    <input  type='hidden' name='id' value='".$id."'>
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