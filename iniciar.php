<?php
// Inicia la sesión
session_start();

// Conexión a la base de datos
include 'conexion.php';

// Verifica que el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $correo = $_POST['correo'];
    $clave = $_POST['Clave'];

    // Buscar el usuario por su correo
    $sql = "SELECT * FROM registrar WHERE correo = '$correo'";
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        $fila = mysqli_fetch_assoc($resultado);

        // Verificar la contraseña
        if ($clave == $fila['Clave']) {

            // Guardar datos de la sesión
            $_SESSION['id'] = $fila['id'];
            $_SESSION['nombre'] = $fila['nombre'];
            $_SESSION['correo'] = $fila['correo'];
            $_SESSION['tipo'] = $fila['TipoCuenta'];

            // Redireccionar según el rol guardado en la base de datos
            if ($fila['TipoCuenta'] == 'administrador') {
                header("Location: dashboard.php");
            } else {
                header("Location: index.php");
            }
            exit();

        } else {
            echo "Contraseña incorrecta.";
        }

    } else {
        echo "Usuario no encontrado.";
    }

    mysqli_close($conexion);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Iniciar Sesión - Institución Educativa Gilberto Alzate Avendaño</title>
<link rel="stylesheet" href="CSS/styles.css">
<link rel="stylesheet" href="CSS/iniciar.css">
<link rel="stylesheet" href="CSS/registrar.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&family=Pirata+One&display=swap">
</head>
<body>

<div class="login-container">

    <h1><span>COES</span>CON</h1>
    <p class="login-subtitle">Consejo Estudiantil Universitario</p>

    <form id="loginForm" method="POST" action="Iniciar.php">

        <div class="form-group">
            <label for="email">CORREO INSTITUCIONAL</label>
            <input
                type="email"
                id="email"
                name="correo"
                placeholder="usuario@universidad.edu"
                required>
        </div>

        <div class="form-group password">
            <label for="password">CONTRASEÑA</label>

            <input
                type="password"
                id="password"
                name="Clave"
                placeholder="••••••••"
                required>

            <button type="button" class="show-password" onclick="togglePassword()">
                👁
            </button>
        </div>
        <div class="remember-me">
            <input type="checkbox" id="remember">
            <label for="remember">Recordar sesión</label>
        </div>

        <button type="submit" class="btn">
            Ingresar al Portal →
        </button>

    </form>

    <div class="divider">
        <span>¿NO TIENES CUENTA?</span>
    </div>

    <br>
    <p class="register-link">
        <center><a href="registrar.php">Crear una cuenta</a></center>
    </p>
</div>
</body>