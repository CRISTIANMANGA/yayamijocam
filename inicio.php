<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - YaYaMijoCam</title>
    <style>
        /* Estilos CSS para la página de inicio */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
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

        #content {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        h1, h2 {
            margin: 0;
            color: #333333;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 20px;
            margin-top: 10px;
        }

        p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .button-container button {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div id="header">
        <h1>¡Bienvenido!</h1>
        <p>Videochat  Aleatorio</p>
    </div>

    <div id="content">
        <h2>¿Qué te gustaría hacer hoy?</h2>
        <div class="button-container">
            <button>Buscar Amigos</button>
            <div class="button-container">
    <a href="index.html" class="button">Iniciar Videochat</a>
</div>

           <form action="logout.php" method="post">
    <button type="submit">Cerrar Sesión</button>
</form>
        </div>
    </div>
</body>
</html>
