
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Nuevo Usuario</title>
        <link rel="stylesheet" href="..css/form-validation.css">
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
                        <h1 class="mt-4">Registrar Usuario</h1>
                        
    <div class="card bg-light" style="margin: 10px; ">
      
        <form class="needs-validation" novalidate style="margin: 20px; " action="../php/register_user1.php" method="POST"  onsubmit="return validarContraseña()">
          <div class="container">
            <div class="col-12">
              <label for="firstName" class="form-label">Nombre Completo</label>
              <input type="text" class="form-control" id="firstName" onkeyup="this.value=this.value.toUpperCase();"   placeholder="Escribir nombre y apellido" required name="nombre" maxlength="50">
              <div class="invalid-feedback">
                Campo Requerido.
              </div>
            </div>

            <div class="col-12">
              <label for="lastName" class="form-label">Nombre de Usuario</label>
              <input type="text" class="form-control" id="lastName" placeholder="Escribir usuario" required name="usuario" >
              <div class="invalid-feedback">
              Campo Requerido.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Correo Electronico</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="email" class="form-control" onkeyup="this.value=this.value.toUpperCase();"    placeholder="Escribir correo electronico" required name="correo" maxlength="50" >
              <div class="invalid-feedback">
              Campo Requerido.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="contraseña" placeholder="Escribir contraseña" required name="clave" maxlength="15" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+~`|}{\[\]\\:';/?.><,-])(?=.*[a-zA-Z]).{8,15}">
              <div class="invalid-feedback">
              Campo Requerido.
              </div>
            </div>

            <div class="col-12">
            <label for="state" class="form-label">Selecionar Cargo</label>
              <select class="form-select" id="state" required name="cargo">
                 <option value="">...</option>
          
                <option value="2">ADMINISTRADOR</option>
                <option value="3">USUARIO GENERAL</option>
               
              </select>
              <div class="invalid-feedback">
              Campo Requerido.
              </div>
            </div>

            
              <input type="hidden" class="form-control" name="fecha">
        

            
       
       
          
          

          <hr class="my-4">

          <button class=" btn btn-primary btn-lg col-12" type="submit">Registrar</button>
        </form>
      </div>
    </div>
                    
                        
                    </div>             
</main>
<script src="../js/vali_clave.js" crossorigin="anonymous"></script>
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

