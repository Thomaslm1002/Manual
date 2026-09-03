<?php
// Incluir el archivo de conexión a la base de datos
include("conexion.php");
// Consulta SQL para obtener todos los registros de la tabla "registrar"
$sql = "SELECT * FROM registrar";
// Ejecutar la consulta y almacenar el resultado en la variable $resultado
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Usuarios</title>

<link rel="stylesheet" href="CSS/dashboard.css">
<link rel="stylesheet" href="CSS/usuarios.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>

<div class="container">

<?php include("include/sidebar.php"); ?>

<div class="main">

<div class="navbar">

<h2>Usuarios</h2>

<div class="user">

Administrador

</div>

</div>

<div class="content">

<h1>Administración de Usuarios</h1>

<table>

<tr>

<th>ID</th>

<th>Nombre</th>

<th>Correo</th>

<th>Tipo Cuenta</th>

<th>Acciones</th>

</tr>

<?php while($fila=mysqli_fetch_assoc($resultado)){ ?>

<tr>

<td><?php echo $fila['id']; ?></td>

<td><?php echo $fila['Nombre']; ?></td>

<td><?php echo $fila['correo']; ?></td>

<td><?php echo $fila['TipoCuenta']; ?></td>

<td>

<a class="btn editar" href="PHP/editar_usuarios.php?id=<?php echo $fila['id']; ?>">

Editar

</a>

<a class="btn eliminar"

onclick="return confirm('¿Eliminar usuario?')"

href="PHP/eliminar_usuarios.php?id=<?php echo $fila['id']; ?>">

Eliminar

</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</div>

</div>

</body>

</html>