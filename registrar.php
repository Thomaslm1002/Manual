<?php
// Incluye el archivo de conexión con la base de datos
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $confirmarClave = $_POST['confirmarClave'];

    // Verificar que las contraseñas coincidan
    if ($clave != $confirmarClave) {
        echo "Las contraseñas no coinciden";
        exit();
    }

    // Verificar si el correo es de un administrador
    $sqlAdmin = "SELECT * FROM administradores WHERE correo = '$correo'";
    $resultadoAdmin = mysqli_query($conexion, $sqlAdmin);

    if (mysqli_num_rows($resultadoAdmin) > 0) {
        $tipoCuenta = "administrador";
    } else {
        $tipoCuenta = "usuario";
    }

    // Registrar usuario
    $sql = "INSERT INTO registrar
    (nombre, correo, clave, confirmarclave, TipoCuenta)
    VALUES
    ('$nombre', '$correo', '$clave', '$confirmarClave', '$tipoCuenta')";

    if (mysqli_query($conexion, $sql)) {

        // Redirección según el tipo de cuenta
        if ($tipoCuenta == "administrador") {
            header("Location: dashboard.php");
        } else {
            header("Location: index.php");
        }
        exit();

    } else {
        echo "Error: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/registrar.css">
</head>
<body>
    <div class="register-container">
    <h2>Crear Cuenta</h2>
    <p class="register-subtitle">Únete a nuestra comunidad educativa</p>
    
    <form id="registerForm" method="POST" action="">
      <div class="form-group">
        <input type="text" name="nombre" placeholder="Nombre Completo" required>
      </div>
      
      <div class="form-group">
        <input type="email" name="correo" placeholder="Correo Electronico" required>
      </div>
      
      <div class="form-row">
        <div class="form-group">
          <input type="password" name="clave" placeholder="••••••••">
        </div>
        
        <div class="form-group">
          <input type="password" name="confirmarClave" placeholder="••••••••">
        </div>
      </div>
      
      <div class="form-group">
        <label for="userType">Tipo de Cuenta</label>
        <select id="userType" name="tipoCuenta" placeholder="Selecciona tu tipo de cuenta" required>
          <option value="">Selecciona tu tipo de cuenta</option>
          <option value="usuario">Usuario</option>
          <option value="administrador">Administrador</option>
        </select>
      </div>
      
      <div class="admin-key-group" id="adminKeyGroup">
        <label for="adminKey" >🔐 Clave de Administrador</label>
        <input type="password" id="adminKey" name="ClaveAdmin" placeholder="Ingresa la clave de administrador">
        <div class="error-message" id="adminKeyError">Clave de administrador incorrecta</div>
      </div>
      
      <button type="submit" class="btn">Crear Cuenta</button>
    </form>
    
    <div class="divider">
        <span>¿TIENES CUENTA?</span>
    </div>
        <p class="login-link"><a href="Iniciar.php">Inicia sesión aquí</a></p>
    </div>

</body>
</html>