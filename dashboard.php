<?php
// Incluye el archivo de conexión con la base de datos
include("conexion.php");
// Contar usuarios registrados
// Consulta SQL para contar el número total de usuarios registrados
$sqlUsuarios = "SELECT COUNT(*) AS total FROM registrar";
// Ejecuta la consulta
$resultadoUsuarios = mysqli_query($conexion, $sqlUsuarios);
// Obtiene el resultado de la consulta en un arreglo asociativo
$filaUsuarios = mysqli_fetch_assoc($resultadoUsuarios);
// Guarda la cantidad total de usuarios en una variable
$totalUsuarios = $filaUsuarios['total'];

// Contar sugerencias o contactos
// Consulta SQL para contar el número total de registros en la tabla contacto
$sqlSugerencias = "SELECT COUNT(*) AS total FROM contacto";
// Ejecuta la consulta
$resultadoSugerencias = mysqli_query($conexion, $sqlSugerencias);
// Guarda el total de sugerencias en una variable
$totalSugerencias = mysqli_fetch_assoc($resultadoSugerencias)['total'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard | ManualitOnline</title>
<link rel="stylesheet" href="CSS/dashboard.css">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>

<div class="container">
<?php include("include/sidebar.php"); ?>

    <!-- MAIN -->

    <div class="main">

        <div class="navbar">

            <h2>Dashboard</h2>

            <div class="user">
                <i class="fas fa-user-circle"></i>
                Administrador
            </div>

        </div>

        <div class="content">

            <h1>¡Bienvenido!</h1>
            <p>Panel de administración de ManualitOnline.</p>

            <div class="cards">

                <div class="card">
                    <i class="fas fa-users"></i>
                    <h2><?php echo $totalUsuarios; ?></h2>
                    <p>Usuarios</p>
                </div>

                <div class="card">
                    <i class="fas fa-book"></i>
                    <h2>1</h2>
                    <p>Manual</p>
                </div>

                <div class="card">
                    <i class="fas fa-newspaper"></i>
                    <h2>12</h2>
                    <p>Noticias</p>
                </div>

                <div class="card">
                    <i class="fas fa-comments"></i>
                    <h2><?php echo $totalSugerencias; ?></h2>
                    <p>Sugerencias</p>
                </div>

            </div>

        </div>

    </div>

</div>
<script src="JS/dashboard.js"></script>

</body>
</html>