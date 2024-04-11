
<?php $id= $_GET['id'];?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>preguntas de Seguridad</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Preguntas de Seguridad</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">Por favor responda las siguientes preguntas de seguridad</div>
                                      
                                        <form  action="../php/valida_preguntas.php?id=<?=$id;?>" method="POST" class="row g-3 needs-validation" novalidate>
                                        <?php
    
         
    require"../php/conexion.php";
   $query="SELECT * FROM usuarios u LEFT JOIN preguntas p  ON p.id_user=u.id WHERE id= $id ";
$resultadu=mysqli_query($conexion, $query); 

while($fila = mysqli_fetch_array($resultadu)){
  

echo"
<div class='form-floating mb-3'>
<input class='form-control' id='pregunta1' type='text' name='respuesta1'  required/>
<label for='pregunta1'>". $fila['pregunta1']. "</label>
<div class='invalid-feedback'>
Campo Requerido
</div>
</div>
";
echo"
<div class='form-floating mb-3'>
<input class='form-control' id='pregunta1' type='text' name='respuesta2'  required/>
<label for='pregunta1'>". $fila['pregunta2']. "</label>
<div class='invalid-feedback'>
Campo Requerido
</div>
</div>
";
echo"
<div class='form-floating mb-3'>
<input class='form-control' id='pregunta1' type='text' name='respuesta3'  required/>
<label for='pregunta1'>". $fila['pregunta3']. "</label>
<div class='invalid-feedback'>
Campo Requerido
</div>

";
}
?>  
                                    
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <button class="w-100 btn btn-lg btn-primary" type="submit">Enviar</button>
                                             
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
