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
    ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>home</title>
        <link href="../css/datatables@latest_dist_style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
     <link rel="stylesheet" href="../css/bootstrap-icons.css">
<script src="../js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       <?php require'nav.php';?>
            
           <?php require'setion.php';?>
    
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
