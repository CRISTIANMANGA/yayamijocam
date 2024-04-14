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

// Recibir datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $genero = $_POST['genero'];

    // Insertar datos en la base de datos
    $sql = "INSERT INTO usuarios (usuario, email, contraseña, fecha_nacimiento, genero) 
            VALUES ('$usuario', '$email', '$contraseña', '$fecha_nacimiento', '$genero')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
        // Redireccionar al usuario a login.php después del registro
        header("Location: login.php");
        exit();
    } else {
        echo "Error al registrar usuario: " . $conn->error;
    }
}

// Cerrar conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - YaYaMijoCam</title>
    <style>
        /* Estilos CSS para el formulario de registro */
        /* Puedes personalizar estos estilos según tus preferencias */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #registro-box {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #333333;
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: #666666;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"],
        select {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div id="registro-box">
        <h2>Registro en YaYaMijoCam</h2>
        <form action="register.php" method="post">
            <div>
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div>
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" required>
            </div>
            <div>
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
            </div>
            <div>
                <label for="genero">Género:</label>
                <select id="genero" name="genero" required>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                    <option value="otro">Otro</option>
                </select>
            </div>
            <div>
                <button type="submit">Registrarse</button>
            </div>
        </form>
        <p style="text-align: center; font-size: 14px;">¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a></p>
    </div>
</body>
</html>
