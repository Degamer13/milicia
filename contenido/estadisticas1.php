<?php
require"../php/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Estadisticas</title>
        <link href="../css/datatables@latest_dist_style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
     <link rel="stylesheet" href="../css/bootstrap-icons.css">
     <link rel="Shortcut Icon" type="image/x-icon" href="../img/logo.png" />
<script src="../js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <?php require'nav1.php';?>
        
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Estadisticas</h1>
                        <ol class="breadcrumb mb-4">
                            
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                Milicia Bolivariana donde el pueblo puede la patria se crece
                                .
                            </div>
                        </div>
                        
                       
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Estadistica por Jerarquia
                                    </div>
                                    <div class="card-body"><canvas id="canvas" width="80%" height="20"></canvas></div>
                                    
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Estadistica por ADI
                                    </div>
                                    <div class="card-body"><canvas id="canvas1" width="80%" height="20"></canvas></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php require'footer.php';?>
            </div>
        </div>
        <?php
                                     

$queto= "SELECT jerarquia, SUM(count) as counter FROM datos_militar GROUP BY jerarquia ";
$queto1= "SELECT jerarquia FROM datos_militar GROUP BY jerarquia";

$result= [mysqli_query($conexion, $queto), mysqli_query($conexion, $queto1)];

?>
        <script src="../js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="../chartJS/Chart.js" crossorigin="anonymous"></script>
        <script>
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	var barChartData = {
		labels : [
            <?php
                    while($fila = mysqli_fetch_array($result[1])){
                    ?>
                    "<?= $fila['jerarquia'] ?>",
                   
                    <?php } ?>
            ],
		datasets : [
            {
				fillColor: "rgba(14,100,50,0.78)",
				strokeColor: "rgba(14,100,50,0.78)",
				highlightFill: "rgba(14,100,50,0.78)",
				highlightStroke: "rgba(14,100,50,0.78)",
				data :
                 [
                    <?php
                    while($fila = mysqli_fetch_array($result[0])){
                    ?>
                    <?= $fila['counter'] ?>,
                    <?php } ?>
                    ]
                    
                }
		
		]

	}
       <?php
 $quet= "SELECT  SUM(count) as counter FROM datos_militar a left join adi_datos b on  a.adi=b.id_a GROUP BY a.adi";
 $que= "SELECT b.descripcion FROM datos_militar a left join adi_datos b on   a.adi =b.id_a GROUP BY a.adi ";
                                      
 $result1= [mysqli_query($conexion, $quet), mysqli_query($conexion, $que)];
                                     
                                     ?>
                                
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	var barChartData1 = {
		labels : [
            <?php
                    while($fila = mysqli_fetch_array($result1[1])){
                    ?>
                    "<?= $fila['descripcion'] ?>",
                   
                    <?php } ?>
            ],
		datasets : [
            {
				fillColor: "rgba(14,100,50,0.78)",
				strokeColor: "rgba(14,100,50,0.78)",
				highlightFill: "rgba(14,100,50,0.78)",
				highlightStroke: "rgba(14,100,50,0.78)",
				data :
                 [
                    <?php
                    while($fila = mysqli_fetch_array($result1[0])){
                    ?>
                    <?= $fila['counter'] ?>,
                    <?php } ?>
                    ]
                    
                }
		
		]

	}
  
    window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});
        var ctx1 = document.getElementById("canvas1").getContext("2d");
		window.myBar1 = new Chart(ctx1).Bar(barChartData1, {
			responsive : true
		});
	}
	</script>
    </body>
</html>
