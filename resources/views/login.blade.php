<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - Educación Continua</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Estilos combinados */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        .container {
            display: flex;
            width: 800px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            background-color: white;
        }

        .left-panel {
            background-color: #b0c5a1;
            color: white;
            width: 40%;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .left-panel h1 {
            font-size: 24px;
            margin: 0;
        }

        .left-panel p {
            font-size: 16px;
            margin-top: 10px;
        }

        .right-panel {
            width: 60%;
            padding: 40px 30px;
        }

        .form-container {
            width: 100%;
        }

        .form-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-container input[type="text"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #6c946b;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-container button:hover {
            background-color: #527e4d;
        }

        .form-container p {
            text-align: center;
            margin-top: 15px;
        }

        .form-container p a {
            color: #007bff;
            text-decoration: none;
        }

        .form-container p a:hover {
            text-decoration: underline;
        }

        .right-panel a {
            text-decoration: none;
            color: #6c757d;
            margin-right: 15px;
        }

        .right-panel a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <h1>Educacion Continua</h1>
            <p>Aprende y alcanza tus objetivos</p>
        </div>
        <div class="right-panel">
            <div class="form-container">
                <h2>Ingresar</h2>
                <form action="ingresar.php" method="post">
                    <label for="nickname">Nickname</label>
                    <input type="text" id="nickname" name="nickname" required>

                    <label for="contrasena">Contraseña</label>
                    <input type="password" id="contrasena" name="contrasena" required>

                    <button type="submit">Ingresar</button>
                </form>
                <p>¿Aún no tienes una cuenta? <a href="registro.php">Registrate</a></p>
            </div>
        </div>
    </div>
</body>
</html>
