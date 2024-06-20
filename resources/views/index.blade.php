<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedNet</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffff;
        }
        .navbar {
            background-color: #6a1b9a;
        }
        .navbar a {
            color: white !important;
            margin: 0 15px;
        }
        .hero-section {
            text-align: center;
            margin: 40px 0;
        }
        .hero-section h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        .hero-section p {
            font-size: 1.25rem;
            margin-bottom: 30px;
        }
        .hero-section img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .features-section {
            display: flex;
            justify-content: space-around;
            margin-top: 40px;
            flex-wrap: wrap;
        }
        .feature {
            text-align: center;
            padding: 20px;
            background-color: #e1bee7;
            border-radius: 10px;
            margin: 10px;
            flex: 1 1 200px; /* Adjust this for responsiveness */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .feature img {
            max-height: 60px;
        }
        .feature h4 {
            margin-top: 10px;
        }
        .btn-primary {
            background-color: #8e24aa;
            border: none;
        }
        .btn-primary:hover {
            background-color: #6a1b9a;
        }
        .register-link {
            display: block;
            margin-top: 15px;
            color: #6a1b9a;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo.png') }}" alt="MedNet Logo" style="max-width: 150px; height: auto;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <li class="nav-item">
    <a class="nav-link" href="{{ route('registro') }}">Registro</a>
</li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Iniciar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container hero-section">
    <h2>BIENVENIDO A</h2>
    <h1>MedNet</h1>
    <p>Consulta con los mejores.</p>
    <button class="btn btn-primary btn-lg">
        <a href="{{ route('registro') }}" style="color: white; text-decoration: none;">Regístrate</a>
    </button>
    <a href="#" class="register-link">Ya soy paciente MedNet</a>

    <!-- Agrega un div para alinear la imagen -->
    <div class="d-flex justify-content-center align-items-center mt-4">
        <img src="{{ asset('images/doctor.png') }}" alt="Doctor Image" style="max-width: 60%; border-radius: 10px; float: right;">
    </div>
</div>


    <div class="container features-section">
        <div class="feature">
            <img src="img/calendar.png" alt="Agenda Citas">
            <h4>AGENDA CITAS</h4>
            <p>Organiza tu propia agenda de consultas con una solicitud</p>
        </div>
        <div class="feature">
            <img src="img/doctor.png" alt="Consulta Médica">
            <h4>CONSULTA MÉDICA</h4>
            <p>Un doctor especializado se encargará de consultarte</p>
        </div>
        <div class="feature">
            <img src="img/expediente.png" alt="Expediente Clínico Digital">
            <h4>EXPEDIENTE CLÍNICO DIGITAL</h4>
            <p>En todo momento tu expediente clínico en un solo click</p>
        </div>
        <div class="feature">
            <img src="img/payment.png" alt="Pagos Online">
            <h4>PAGOS ONLINE</h4>
            <p>Facilitamos tu proceso de pago para consultas y medicamentos</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
