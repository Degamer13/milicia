<?php $id= $_GET['id'];?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cambio de Contraseña</title>
        <link rel="Shortcut Icon" type="image/x-icon" href="../img/logo.png" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="../js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container" >
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Cambio de Contraseña</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">Por favor ingrese su nueva contraseña</div>
                                        <form  action="../php/cambio_passwor.php?id=<?=$id;?>" method="POST" onsubmit="return validarContraseña()" class="row g-3 needs-validation" novalidate>
                                         
                                        <?php
    
         
    require"../php/conexion.php";
   $query="SELECT * FROM usuarios WHERE id= $id ";
$resultadu=mysqli_query($conexion, $query); 

while($fila = mysqli_fetch_array($resultadu)){?>
  


<label><b>Usuario: <?php echo $fila['usuario'] ?></b></label>
<div class='form-floating mb-3'>

<input class='form-control' id="contraseña" type='password' name='clave' maxlength='15' minlength='8' pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+~`|}{\[\]\\:;/?.><,-])(?=.*[a-zA-Z]).{8,15}'  required/>
<label for='pregunta1'>Contraseña Nueva</label>

<div class='invalid-feedback'>
Campo Requerido.



</div>


  
   
   
  

<?php }?>
                                      
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <button class="w-100 btn btn-lg btn-primary" type="submit">Cambiar Contraseña</button>
                                             
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="../index.php" style="text-decoration: none; color:black;">Retornar a login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
          
        </div>
        <script src="../js/vali_clave.js" crossorigin="anonymous"></script>
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

        <script src="../js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
    </body>
</html>