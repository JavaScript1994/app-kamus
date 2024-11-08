<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KAMUS GYM - CRM</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Fondo y estilo para la página */
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .hero-section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            background-color: #FAFAFA;
            color: #252525;
        }
        .hero-content {
            max-width: 40%;
        }
        .hero-content h1 {
            font-size: 6rem;
            font-weight: bold;
            color:#ff5722;
        }
        .hero-content p {
            font-size: 2rem;
            font-weight: bold;
            color:#252525;
        }
        .logo {
            max-width: 200px;
            margin-bottom: 20px;
        }
        .cta-button {
            padding: 12px 30px;
            background-color: #ff5722;
            color: white;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .cta-button:hover {
            background-color: #e64a19;
        }
    </style>
</head>
<body>

    <!-- Sección Hero -->
    <section class="hero-section">
        <div class="hero-content">
            <!-- Logo de Gym -->
            <!-- Nombre de la empresa -->
            <h1>Kamus</h1>
            <p>El sistema perfecto para administrar tu gimnasio. ¡Optimiza tu tiempo y ofrece un mejor servicio a tus clientes!</p>
            <!-- Botón de llamada a la acción -->
            <p class="mt-4">
                <a href="#" class="cta-button">¡Comienza Ahora!</a>
            </p>
        </div>
    </section>


    <!-- Footer -->
    <!-- <footer>
        <div class="copyrights">
            <p>&copy; <?= date('Y') ?> ASRSOFT.COM.</p>
        </div>
    </footer> -->

    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
