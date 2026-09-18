<?php
session_start(); 

include 'conexion.php';

// Verifica si la petición HTTP es de tipo POST (formulario enviado)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene el nombre enviado desde el formulario
    $nombre = $_POST['nombre'];
    // Obtiene el correo enviado desde el formulario
    $correo = $_POST['correo'];
    // Obtiene la contraseña enviada desde el formulario
    $clave = $_POST['clave'];
    // Obtiene la confirmación de contraseña enviada desde el formulario
    $confirmarClave = $_POST['confirmarClave'];

    // Comprueba que la contraseña y su confirmación coincidan
    if ($clave !== $confirmarClave) {
        // Si no coinciden, detiene la ejecución y muestra un mensaje de error
        die("Las contraseñas no coinciden.");
    }
    // Genera un hash seguro de la contraseña para almacenarla cifrada
    $claveHash = password_hash($clave, PASSWORD_DEFAULT);
    // Define la consulta SQL para verificar si el correo pertenece a un administrador
    $sqlAdmin = "SELECT * FROM administradores WHERE correo = ?";
    // Prepara la consulta SQL para evitar inyección SQL
    $stmtAdmin = mysqli_prepare($conexion, $sqlAdmin);
    // Vincula el parámetro correo (tipo string) a la consulta preparada
    mysqli_stmt_bind_param($stmtAdmin, "s", $correo);
    // Ejecuta la consulta preparada
    mysqli_stmt_execute($stmtAdmin);
    // Obtiene el resultado de la consulta ejecutada
    $resultadoAdmin = mysqli_stmt_get_result($stmtAdmin);
    // Determina el tipo de cuenta: "administrador" si el correo existe en la tabla, si no "usuario"
    $tipoCuenta = (mysqli_num_rows($resultadoAdmin) > 0) ? "administrador" : "usuario";
    // Cierra la sentencia preparada de la consulta de administradores
    mysqli_stmt_close($stmtAdmin);
    // Define la consulta SQL para insertar el nuevo registro en la tabla "registrar"
    $sql = "INSERT INTO registrar (nombre, correo, Clave, TipoCuenta) VALUES (?, ?, ?, ?)";
    // Prepara la consulta SQL de inserción
    $stmt = mysqli_prepare($conexion, $sql);
    // Verifica si hubo un error al preparar la consulta
    if (!$stmt) {
        die("Error al preparar la consulta: " . mysqli_error($conexion));
    }

    // Vincula los parámetros (nombre, correo, clave hasheada, tipo de cuenta) a la consulta preparada
    mysqli_stmt_bind_param($stmt, "ssss", $nombre, $correo, $claveHash, $tipoCuenta);

    // Ejecuta la consulta de inserción y comprueba si fue exitosa
    if (mysqli_stmt_execute($stmt)) {
        // Guarda el nombre del usuario en la sesión
        $_SESSION['usuario']    = $nombre;
        // Guarda el correo del usuario en la sesión
        $_SESSION['correo']     = $correo;
        // Guarda el tipo de cuenta del usuario en la sesión
        $_SESSION['tipoCuenta'] = $tipoCuenta;
        // Guarda el ID generado automáticamente por la inserción en la sesión
        $_SESSION['id']         = mysqli_insert_id($conexion); 
    
        // Redirige según el tipo de cuenta: administrador va al dashboard, usuario al index
        if ($tipoCuenta == "administrador") {
            header("Location: dashboard.php");
        } else {
            header("Location: index.php");
        }
        exit();
    // Si la inserción falla, muestra el error correspondiente
    } else {
        echo "Error al registrar: " . mysqli_stmt_error($stmt);
    }
    
    // Cierra la sentencia preparada de inserción
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
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/registrar.css">
</head>
<body>
    <div class="register-container">
        <h2>Crear Cuenta</h2>
        <p class="register-subtitle">
            Únete a nuestra comunidad educativa
        </p>
        <form id="registerForm" method="POST" action="">
            <div class="form-group">
                <input
                    type="text" name="nombre" placeholder="Nombre Completo" required>
            </div>
            <div class="form-group">
                <input type="email" name="correo" placeholder="Correo Electrónico" required>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <input type="password" name="clave" placeholder="••••••••" required>
                </div>
                <div class="form-group">
                    <input type="password" name="confirmarClave" placeholder="••••••••" required>
                </div>
            </div>
            <div class="form-group">
                <label for="userType">
                    Tipo de Cuenta
                </label>
                <select id="userType" name="tipoCuenta" required>
                    <option value="">
                        Selecciona tu tipo de cuenta
                    </option>
                    <option value="usuario">
                        Usuario
                    </option>
                    <option value="administrador">
                        Administrador
                    </option>
                </select>
            </div>
            </div>
            <button type="submit" class="btn"> Crear Cuenta </button>
        </form>
        <div class="divider">
            <span>¿TIENES CUENTA?</span>
        </div>
        <p class="login-link">
            <a href="Iniciar.php">
                Inicia sesión aquí
            </a>
        </p>
    </div>
</body>
</html>

