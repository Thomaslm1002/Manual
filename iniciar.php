<?php
// Inicia o reanuda la sesión del usuario
session_start();
// Incluye el archivo de conexión a la base de datos
include 'conexion.php';
// Verifica si la petición HTTP es de tipo POST (formulario de login enviado)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene el correo enviado desde el formulario
    $correo = $_POST['correo'];
    // Obtiene la contraseña enviada desde el formulario
    $clave = $_POST['Clave'];
    // Define la consulta SQL para buscar al usuario por su correo
    $sql = "SELECT * FROM registrar WHERE correo = ?";
    // Prepara la consulta SQL para evitar inyección SQL
    $stmt = mysqli_prepare($conexion, $sql);
    // Vincula el parámetro correo (tipo string) a la consulta preparada
    mysqli_stmt_bind_param($stmt, "s", $correo);
    // Ejecuta la consulta preparada
    mysqli_stmt_execute($stmt);
    // Obtiene el resultado de la consulta ejecutada
    $resultado = mysqli_stmt_get_result($stmt);
    // Comprueba si se encontró algún registro con ese correo
    if (mysqli_num_rows($resultado) > 0) {
        // Obtiene la fila de resultados como un arreglo asociativo
        $fila = mysqli_fetch_assoc($resultado);
        // Comprobar contraseña
        if (password_verify($clave, $fila['Clave'])) {
            // Crear sesión
            $_SESSION['id'] = $fila['id'];
            $_SESSION['usuario'] = $fila['Nombre'];
            $_SESSION['correo'] = $fila['correo'];
            $_SESSION['tipo'] = $fila['TipoCuenta'];
            // Redireccionar al apartado de Administrador
            if ($fila['TipoCuenta'] === 'administrador') {
                header("Location: dashboard.php");
                exit();
            } else {
                // Redireccionar al apartado de Usuario(Index)
                header("Location: index.php");
                exit();
            }
            } else {
                // Si la contraseña no coincide con el hash almacenado, muestra un mensaje de error
                echo "Contraseña incorrecta.";
        }
    } else {
        // Si no se encontró ningún registro con ese correo, muestra un mensaje de error
        echo "Usuario no encontrado.";
    }
    // Cierra la sentencia preparada
    mysqli_stmt_close($stmt);
    // Cierra la conexión a la base de datos
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
    <p class="login-subtitle">Consejo Escolar Convivencia</p>
    <form id="loginForm" method="POST" action="Iniciar.php">
        <div class="form-group">
            <label for="email">CORREO ELECTRONICO</label>
            <input type="email" id="email" name="correo" placeholder="tunombre@gmail.com" required>
        </div>
        <div class="form-group password">
            <label for="password">CONTRASEÑA</label>
            <input type="password" id="password" name="Clave" placeholder="••••••••" required>
            <button type="button" class="show-password" onclick="togglePassword()">
                👁
            </button>
        </div>
        <div class="remember-me">
            <input type="checkbox" id="remember">
            <label for="remember">Recordar sesión</label>
        </div>
        <button type="submit" class="btn">
            Ingresar a ManualitOnline →
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