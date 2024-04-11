<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Contadores</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Registros Militares</li>
                        </ol>
                        
    <div class="row">       
      <div class="col-md">        
          <div class="card text-center">
            <div class="card-body">
              <h4 class="card-title">Hombres</h4>
              <?php
 require"../php/conexion.php";

  $registras = mysqli_query($conexion, "select count(*) as cantidad from persona WHERE genero='HOMBRE'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  $rego = mysqli_fetch_array($registras);
  echo"<center><h1> <i class='bi-person-fill'></i>".$rego['cantidad']."</h1></center>";


  ?>
            </div>
          </div>          
      </div>

      <div class="col-md">        
          <div class="card text-center">
            <div class="card-body">
              <h4 class="card-title">Mujeres</h4>
              <?php
 require"../php/conexion.php";

  $registras = mysqli_query($conexion, "select count(*) as cantidad from persona WHERE genero='MUJER'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  $rego = mysqli_fetch_array($registras);
  echo"<center><h1> <i class='bi-person-fill'></i>".$rego['cantidad']."</h1></center>";


  ?>
            </div>
          </div>          
      </div>
      
      <div class="col-md">        
          <div class="card text-center">
            <div class="card-body">
              <h4 class="card-title">Total</h4>
              <?php
 require"../php/conexion.php";

  $registras = mysqli_query($conexion, "select count(*) as cantidad from persona ") or
    die("Problemas en el select:" . mysqli_error($conexion));
  $rego = mysqli_fetch_array($registras);
  echo"<center><h1> <i class='bi-person-fill'></i>".$rego['cantidad']."</h1></center>";


  ?>
            </div>
          </div>          
      </div>      
    </div>
    
                      
                </main>