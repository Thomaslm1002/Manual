<?php

// Incluye el archivo que establece la conexión con la base de datos
include("../conexion.php");

// Verifica si se recibió el ID del contacto mediante la URL
if(isset($_GET['id'])){

    // Obtiene el ID del registro que se desea eliminar
    $id = $_GET['id'];

    // Consulta SQL para eliminar el contacto de la tabla "contacto"
    $sql = "DELETE FROM contacto WHERE id='$id'";

    // Ejecuta la consulta de eliminación
    if(mysqli_query($conexion, $sql)){

        // Si la eliminación fue exitosa, redirige a la página de sugerencias
        header("Location: ../sugerencias.php");
        exit();

    }else{

        // Si ocurre un error durante la eliminación, lo muestra en pantalla
        echo "Error al eliminar: " . mysqli_error($conexion);

    }

}else{

    // Si no se recibió un ID válido, redirige a la página de sugerencias
    header("Location: ../sugerencias.php");

}

?>