<?php
// Archivo de conexión a la base de datos
$host = "localhost";
$usuario = "root";
$password = ""; 
$bd = "coescon";
$puerto = 3307;

$conexion = new mysqli($host, $usuario, $password, $bd, $puerto);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

?>