<?php

// Incluye el archivo de conexión a la base de datos
include("../conexion.php");

// Verifica si se recibió el ID del usuario por la URL
if(isset($_GET['id'])){

    // Obtiene el ID del usuario que se desea eliminar
    $id = $_GET['id'];

    // Consulta SQL para eliminar el registro del usuario
    $sql = "DELETE FROM registrar WHERE id='$id'";

    // Ejecuta la consulta de eliminación
    if(mysqli_query($conexion, $sql)){

        // Si la eliminación fue exitosa, redirige a la página de usuarios
        header("Location: ../usuarios.php");
        exit();

    }else{

        // Si ocurre un error, lo muestra en pantalla
        echo "Error al eliminar: " . mysqli_error($conexion);

    }

}else{

    // Si no se recibió un ID válido, redirige a la página de usuarios
    header("Location: ../usuarios.php");

}

?>