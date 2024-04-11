<?php

require "conexion.php";

$id =$_GET['id'];
$queto= "DELETE FROM usuarios WHERE id = $id";
$result = mysqli_query($conexion, $queto);

header("Location: " . $_SERVER["HTTP_REFERER"]);
?>