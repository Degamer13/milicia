<?php

$vato = mysqli_connect("localhost", "root", "");

$cons = "DROP DATABASE IF EXISTS militares";
$cons2 = "CREATE DATABASE militares";

$exec = mysqli_query($vato, $cons);
$exec = mysqli_query($vato, $cons2);
if ($exec) {
  ?><script>
  alert("La base de datos fue eliminada y creada desde 0 restaurar base de datos con un backup");
  window.location.href="../contenido/restauracion.php";
</script><?php
}else{
  echo "malo";
}
