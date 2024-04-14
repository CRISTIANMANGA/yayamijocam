<?php
// Establecer la conexión a la base de datos (debes modificar estos valores según tu configuración)
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "yayamijocam";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
