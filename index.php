<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
   <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('assets/images/hero-slider-1.jpg');
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
        .form-card input[type="password"] {
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
            margin-bottom: 20px;
            padding: 12px 15px;
            width: 100%;
        }

      

        .form-card a {
            color: #999;
            display: block;
            font-size: 14px;
            margin-top: 20px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <form action="servidor/login/logout.php" method="POST">
        <section class="hero text-center" aria-label="home" id="home">
            <div class="container">
                <div class="form-card">
                    <h2><i class="bi bi-person"></i> Iniciar sesión</h2>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="password" required>
                    <br>
                    <div class="ms-3">
                    
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2"href='servicios.php' type="submit">Ingresar</button>
                  <div class="text-center">
                    <div class="ms-3">
                    
                    <div class="d-flex justify-content-center mt-3">
                        <div>
                            <button class="btn btn-outline-dark" onclick="window.location.href='home.php'" type="button">Volver</button>
                        </div>
                        <div class="ms-3">
                            <button class="btn btn-outline-dark" onclick="window.location.href='registro.php'" type="button">Registrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
