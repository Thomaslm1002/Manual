<?php

// Incluye el archivo que contiene la conexión a la base de datos
include("../conexion.php");

// Verifica si se recibió el ID del usuario mediante la URL
if(!isset($_GET['id'])){
    // Si no existe el ID, redirige a la página de usuarios
    header("Location: usuarios.php");
    exit();
}

// Obtiene el ID enviado por la URL
$id = $_GET['id'];

// Consulta la información del usuario correspondiente al ID
$sql = "SELECT * FROM registrar WHERE id='$id'";
$resultado = mysqli_query($conexion, $sql);

// Guarda los datos obtenidos en un arreglo asociativo
$usuario = mysqli_fetch_assoc($resultado);

// Verifica si se presionó el botón "Actualizar"
if(isset($_POST['actualizar'])){

    // Captura los datos enviados desde el formulario
    $nombre = $_POST['Nombre'];
    $correo = $_POST['correo'];
    $clave = $_POST['Clave'];
    $confirmar = $_POST['ConfirmarClave'];
    $tipo = $_POST['TipoCuenta'];

    // Consulta SQL para actualizar la información del usuario
    $actualizar = "UPDATE registrar SET

    Nombre='$nombre',
    correo='$correo',
    Clave='$clave',
    ConfirmarClave='$confirmar',
    TipoCuenta='$tipo'

    WHERE id='$id'";

    // Ejecuta la actualización en la base de datos
    if(mysqli_query($conexion, $actualizar)){

        // Si la actualización es exitosa, redirige a la página de usuarios
        header("Location: ../usuarios.php");
        exit();

    }else{

        // Si ocurre un error, muestra el mensaje correspondiente
        echo "Error: " . mysqli_error($conexion);

    }

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Usuario</title>
<link rel="stylesheet" href="CSS/dashboard.css">

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

option{
padding:10px;
width:100%;
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

<h2>Editar Usuario</h2>

<form method="POST">

<input type="text" name="Nombre"
value="<?php echo $usuario['Nombre']; ?>" required>

<input type="email" name="correo"
value="<?php echo $usuario['correo']; ?>" required>

<input type="text" name="Clave"
value="<?php echo $usuario['Clave']; ?>" required>

<input type="text" name="ConfirmarClave"
value="<?php echo $usuario['ConfirmarClave']; ?>" required>

<select name="TipoCuenta">

<option value="Administrador"
<?php if($usuario['TipoCuenta']=="Administrador") echo "selected"; ?>>
Administrador
</option>

<option value="Usuario"
<?php if($usuario['TipoCuenta']=="Usuario") echo "selected"; ?>>
Usuario
</option>

</select>

<button name="actualizar">
Actualizar Usuario
</button>

</form>

</div>

</body>

</html>