<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
   
    <title>Inicio</title>

    <link rel="Shortcut Icon" type="image/x-icon" href="img/logo.png" />
    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  
    <!-- Custom styles for this template -->
    <link href="css/heroes.css" rel="stylesheet">

  
  </head>
  <body>
    
<main>
  



  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
     <h1 class="display-4 fw-bold lh-1 mb-3">Iniciar Sesión <img class="rounded float-end" src="img/logo.png" alt="" width="150"></h1>
        
        <p class="col-lg-8 fs-5 " style="text-align: justify;">Ingrese con su usuario y contraseña para iniciar sesión con su perfil, si no posee usuario en la pagina informar a su superior para crearle una cuenta.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form  action="php/valida.php" method="POST" class="row g-3 needs-validation" style="background-color: whitesmoke;
         padding: 35px 35px; " novalidate >
          <div class="form-floating mb-3">
            <input type="text" class="form-control"  name="usuario" placeholder="Usuario"   required="">
            <label for="floatingInput">Usuario</label>
            <div class="invalid-feedback">
        Campo Requerido
      </div>
          </div>
          
          <div class="form-floating mb-3">
            <input type="password" class="form-control"  name="clave" placeholder="Contraseña" required="">
            <label for="floatingPassword">Contraseña</label>
            <div class="invalid-feedback">
            Campo Requerido
      </div>
          </div>
         
          <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar</button>
          <hr class="my-4">
          <!--<small> <a href="./contenido/recur.php" style="color: black; text-decoration: none;">Recuperar Contraseña</a></small> -->

          <a href="contenido/password.php" class="small" style="text-decoration: none; color:black;">¿Olvido su Contraseña?</a>
        </form>
        
      </div>
    </div>
  </div>

 
</main>
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

    <script src="js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
