<?php

// Incluye el archivo de conexión a la base de datos
include("../conexion.php");

// Verifica si se recibió el ID del contacto por la URL
if(!isset($_GET['id'])){
    // Si no existe el ID, redirige a la página de contacto
    header("Location: /Coescon/contacto.php");
    exit();
}

// Obtiene el ID enviado por la URL
$id = $_GET['id'];

// Consulta los datos del contacto correspondiente al ID
$sql = "SELECT * FROM contacto WHERE id='$id'";
$resultado = mysqli_query($conexion, $sql);

// Guarda los datos obtenidos en un arreglo asociativo
$contacto = mysqli_fetch_assoc($resultado);

// Verifica si se presionó el botón "Actualizar"
if(isset($_POST['actualizar'])){

    // Captura los datos enviados desde el formulario
    $nombre = $_POST['Nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // Consulta SQL para actualizar la información del contacto
    $actualizar = "UPDATE contacto SET

    Nombre='$nombre',
    correo='$correo',
    telefono='$telefono',
    asunto='$asunto',
    mensaje='$mensaje'

    WHERE id='$id'";

    // Ejecuta la actualización en la base de datos
    if(mysqli_query($conexion, $actualizar)){

        // Si la actualización fue exitosa, redirige a la página de sugerencias
        header("Location: /Manual/sugerencias.php");
        exit();

    }else{

        // Si ocurre un error, lo muestra en pantalla
        echo "Error: " . mysqli_error($conexion);

    }

}

?>

<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">

<title>Editar Contacto</title>

<link rel="stylesheet" href="/CSS/dashboard.css">


<style>

.formulario{

width:500px;
margin:40px auto;
background:white;
padding:25px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,.1);

}

.formulario h2{

margin-bottom:20px;

}

input,
textarea{

width:100%;
padding:10px;
margin:10px 0;

}

textarea{

height:120px;
resize:none;

}

button{

width:100%;
padding:12px;
background:#2563eb;
color:white;
border:none;
cursor:pointer;
border-radius:5px;

}

button:hover{

background:#1d4ed8;

}

</style>

</head>

<body>

<div class="formulario">

<h2>Editar Contacto</h2>

<form method="POST">

<input type="text" name="Nombre" value="<?php echo $contacto['Nombre']; ?>" required>

<input type="email" name="correo" value="<?php echo $contacto['correo']; ?>" required>

<input type="text" name="telefono" value="<?php echo $contacto['telefono']; ?>" required>

<input type="text" name="asunto" value="<?php echo $contacto['asunto']; ?>" required>

<textarea name="mensaje" required><?php echo $contacto['mensaje']; ?></textarea>

<button name="actualizar">
Actualizar Contacto
</button>

</form>

</div>

</body>
</html>