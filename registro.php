<!doctype html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <title>Registrador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('assets/images/hero-slider-2.jpg');
            background-size: cover;
            background-position: center;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
        }

        .form-card {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
        }

        .form-card h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 30px;
        }

        .form-card input[type="text"],
        .form-card input[type="password"],
        .form-card input[type="email"],
        .form-card input[type="tel"] {
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
            margin-bottom: 20px;
            padding: 12px 15px;
            width: 100%;
        }

        .form-card input[type="submit"] {
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            padding: 12px 20px;
        }

        .form-card input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .form-card a {
            color: #999;
            display: block;
            font-size: 14px;
            margin-top: 20px;
            text-decoration: none;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
            display: none;
        }
    </style>
    <script>
        function showError(message) {
            var errorMessage = document.getElementById('error-message');
            errorMessage.innerText = message;
            errorMessage.style.display = 'block';
        }

        function validateForm() {
            var errorMessage = document.getElementById('error-message');
            errorMessage.style.display = 'none';

            var nombreInput = document.getElementById('nombre');
            var nombreValue = nombreInput.value.trim();

            // Validar que el campo Nombre solo contenga letras
            var regex = /^[a-zA-Z\s]*$/;
            if (!regex.test(usuarioValue)) {
                showError("El campo Nombre solo puede contener letras");
                return false;
            }

            return true;
        }
    </script>
</head>

<body>
    <form action="servidor/registro/registrar.php" method="POST" onsubmit="return validateForm()">
        <div class="container">
            <div class="form-card">
                <h2>Crear una cuenta</h2>
                <input type="text" placeholder="Usuario" name="usuario" required>
                <input type="password" placeholder="Contraseña" name="password" required>
                <input type="submit" value="Registrar" name="btnregistrar">
                <br>
                <div>
                       <br>     <button class="btn btn-outline-dark" onclick="window.location.href='home.php'" type="button">Volver</button>
              </div>   
                <span class="error-message" id="error-message"><?php echo $error; ?></span>
            </div>
            
        </div>
    </form>
</body>
</html>
