<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Curso</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            width: 50%;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .image-upload {
            width: 100%;
            height: 200px;
            background-color: #A6C48A;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            margin-bottom: 20px;
            border: 2px solid #3b5998;
            cursor: pointer;
        }

        .image-upload input {
            display: none;
        }

        .image-upload label {
            cursor: pointer;
            color: white;
            font-size: 50px;
        }

        h1 {
            text-align: center;
            color: #3b5998;
        }

        h2 {
            color: #3b5998;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input,
        textarea {
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .cajaTexto {
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 400px;
        }

        .form-section {
            display: flex;
            justify-content: space-between;
        }

        .form-section div {
            flex: 1;
            margin-right: 10px;
        }

        .form-section div:last-child {
            margin-right: 0;
        }

        button {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .cancel-btn {
            background-color: #ccc;
            margin-right: 10px;
        }

        .create-btn {
            background-color: #3b5998;
            color: white;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Añadir Curso</h1>
        <div class="image-upload" onclick="document.getElementById('imageUpload').click();">
            <input type="file" id="imageUpload" accept="image/*">
            <label for="imageUpload">+</label>
        </div>
        <form>
            <input type="text" placeholder="Nombre del curso">
            <textarea placeholder="Descripción"></textarea>
            <div class="form-section">
                <div>
                    <h2>Duración del curso</h2>
                    <input class="cajaTexto" type="text" placeholder="Duración">
                    <input class="cajaTexto" type="text" placeholder="Días">
                    <input class="cajaTexto" type="text" placeholder="Horario">
                    <input class="cajaTexto" type="text" placeholder="Precio $">
                </div>
                <div>
                    <h2>Detalles del curso</h2>
                    <input class="cajaTexto" type="text" placeholder="Instructor">
                    <input class="cajaTexto" type="text" placeholder="Tipo del curso">
                </div>
            </div>
            <div class="button-container">
                <button type="cancel" class="cancel-btn">Cancelar</button>
                <button type="submit" class="create-btn">Crear</button>
            </div>
        </form>
    </div>
    <script>
        document.querySelector('.image-upload').addEventListener('click', function() {
            document.getElementById('imageUpload').click();
        });
    </script>
</body>

</html>