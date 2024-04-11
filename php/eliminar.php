<?php
// Conexión a la base de datos
require "conexion.php";

// Verifica si se ha enviado un formulario para eliminar un usuario
if(isset($_GET['id'])){
    // Obtiene el ID del usuario que se está eliminando
    $id_usuario_eliminar = $_GET['id'];

    // Obtiene el ID del usuario actualmente conectado
    session_start();
    $id_usuario_conectado = $_SESSION['id'];

    // Verifica si el usuario que se está eliminando es el mismo que el usuario conectado
    if($id_usuario_eliminar == $id_usuario_conectado){
        // Muestra un mensaje de error y no permite la eliminación
		?><script>
	alert("No puedes eliminarte a ti mismo");
	window.location.href="../contenido/registros_usuarios.php";
</script><?php
        
    } else {
        // Elimina el usuario de la base de datos
        $query = "DELETE FROM usuarios WHERE id = $id_usuario_eliminar";
        mysqli_query($conexion, $query);
        ?><script>
	alert("El usuario ha sido eliminado");
	window.location.href="../contenido/registros_usuarios.php";
</script><?php
    }
}
?>