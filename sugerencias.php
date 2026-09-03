<?php
include("conexion.php");
// Consulta SQL para obtener todos los registros de la tabla "contacto"
$sql = "SELECT * FROM contacto";
// Ejecutar la consulta y almacenar el resultado en la variable $resultado
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Sugerencias</title>

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

<h1>Administración de Contacto</h1>
<table>

<tr>

<th>ID</th>

<th>Nombre</th>

<th>Correo</th>

<th>Teléfono</th>

<th>Asunto</th>

<th>Mensaje</th>n

<th>Acciones</th>

</tr>

<?php while($fila=mysqli_fetch_assoc($resultado)){ ?>

<tr>

<td><?php echo $fila['id']; ?></td>

<td><?php echo $fila['Nombre']; ?></td>

<td><?php echo $fila['correo']; ?></td>

<td><?php echo $fila['telefono']; ?></td>

<td><?php echo $fila['asunto']; ?></td>

<td><?php echo $fila['mensaje']; ?></td>
<td>

<a class="btn editar" href="PHP/editar_contacto.php?id=<?php echo $fila['id']; ?>">

Editar

</a>

<a class="btn eliminar"

onclick="return confirm('¿Eliminar contacto?')"

href="PHP/eliminar.contacto.php?id=<?php echo $fila['id']; ?>">

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