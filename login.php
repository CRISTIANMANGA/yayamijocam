<?php
    // Si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Incluir el archivo de conexión a la base de datos
        include 'conexion.php';

        // Recibir datos del formulario
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];

        // Consulta para verificar el inicio de sesión
        $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Iniciar sesión (debes implementar esto según tus necesidades)
            session_start();
            $_SESSION['usuario'] = $usuario;
            // Redireccionar al usuario a una página de inicio después del inicio de sesión
            header("Location: inicio.php");
            exit();
        } else {
            echo "Usuario o contraseña incorrectos";
        }

        // Cerrar conexión
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - YaYaMijoCam</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
        }

        #header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            margin-bottom: 20px;
        }

        #login-box {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
            margin-top: 190px; /* Ajuste aquí */
        }

        h1, h2 {
            margin: 0;
            color: #333333;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 5px;
        }

        h2 {
            font-size: 24px;
            margin-top: 5px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: #666666;
            text-align: left;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 12px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button[type="submit"],
        button[type="button"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 15px;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover,
        button[type="button"]:hover {
            background-color: #45a049;
        }

        button#anonimo {
            width: 100%;
            background-color: black;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 15px;
            transition: background-color 0.3s;
            /* Añadimos un logotipo */
            background-image: url('https://image.flaticon.com/icons/png/512/69/69881.png');
            background-size: 20px;
            background-position: 10px 50%;
            background-repeat: no-repeat;
            padding-left: 40px; /* Para dejar espacio para el logotipo */
        }

        button#anonimo:hover {
            background-color: #333;
        }

        a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div id="header">
        <h1>YaYaMijoCam</h1>
        <h2>Videochat Aleatorio</h2>
    </div>

    <div id="login-box">
        <h2>Iniciar Sesión</h2>
        <form action="login.php" method="post">
            <div>
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div>
                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" required>
            </div>
            <div>
                <button type="submit">Iniciar Sesión</button>
            </div>
        </form>
        <button id="anonimo" type="button" onclick="ingresarAnonimamente()">Ingresar Anónimamente</button>
            <link rel="stylesheet" href="index.html">
        <p style="text-align: center; font-size: 14px;">¿Aun no tienes cuenta? <a href="register.php">Registrate aquí</a></p>
 </div>

 <script>
        document.getElementById("anonimo").addEventListener("click", function() {
            window.location.href = "inicio.php";
        });
    </script>
</body>
</html>
