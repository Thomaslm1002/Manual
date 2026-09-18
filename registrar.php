<?php
session_start(); 

include 'conexion.php';

//
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //
    $nombre = $_POST['nombre'];
    //
    $correo = $_POST['correo'];
    //
    $clave = $_POST['clave'];
    //
    $confirmarClave = $_POST['confirmarClave'];

    //
    if ($clave !== $confirmarClave) {
        //
        die("Las contraseñas no coinciden.");
    }
    //
    $claveHash = password_hash($clave, PASSWORD_DEFAULT);
    //
    $sqlAdmin = "SELECT * FROM administradores WHERE correo = ?";
    //
    $stmtAdmin = mysqli_prepare($conexion, $sqlAdmin);
    //
    mysqli_stmt_bind_param($stmtAdmin, "s", $correo);
    //
    mysqli_stmt_execute($stmtAdmin);
    //
    $resultadoAdmin = mysqli_stmt_get_result($stmtAdmin);
    //
    $tipoCuenta = (mysqli_num_rows($resultadoAdmin) > 0) ? "administrador" : "usuario";
    mysqli_stmt_close($stmtAdmin);
    //
    $sql = "INSERT INTO registrar (nombre, correo, Clave, TipoCuenta) VALUES (?, ?, ?, ?)";
    //
    $stmt = mysqli_prepare($conexion, $sql);
    //
    if (!$stmt) {
        die("Error al preparar la consulta: " . mysqli_error($conexion));
    }

    //
    mysqli_stmt_bind_param($stmt, "ssss", $nombre, $correo, $claveHash, $tipoCuenta);

    //
    if (mysqli_stmt_execute($stmt)) {
        //
        $_SESSION['usuario']    = $nombre;
        //
        $_SESSION['correo']     = $correo;
        //
        $_SESSION['tipoCuenta'] = $tipoCuenta;
        //
        $_SESSION['id']         = mysqli_insert_id($conexion); 
        //
    
        //
        if ($tipoCuenta == "administrador") {
            header("Location: dashboard.php");
        } else {
            header("Location: index.php");
        }
        exit();
    //
    } else {
        echo "Error al registrar: " . mysqli_stmt_error($stmt);
    }
    
    //
    mysqli_stmt_close($stmt);
    //
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

