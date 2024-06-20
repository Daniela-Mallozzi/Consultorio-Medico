<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedNet - Registro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }
        .navbar {
            background-color: #6a1b9a;
        }
        .navbar a {
            color: white !important;
            margin: 0 15px;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container form {
            margin-bottom: 0;
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
                    <a class="nav-link" href="{{ route('index') }}">Página Principal</a>
                </li>
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

    <div class="container form-container">
        <h2>Registro de Usuario</h2>
        <form id="registroForm" action="{{ route('registro') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Crear Contraseña:</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirmar Contraseña:</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                <div id="password_error" style="color: red; display: none;">Las contraseñas no coinciden.</div>
            </div>
            <div class="form-group">
                <label for="genero">Género *:</label>
                <select id="genero" name="genero" class="form-control">
                    <option value="">Selecciona</option>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                    <option value="otro">Otro</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const password = document.getElementById("password");
            const confirm_password = document.getElementById("confirm_password");
            const password_error = document.getElementById("password_error");

            confirm_password.addEventListener("keyup", function() {
                if (confirm_password.value !== password.value) {
                    password_error.style.display = "block";
                } else {
                    password_error.style.display = "none";
                }
            });

            const registroForm = document.getElementById("registroForm");

            registroForm.addEventListener("submit", function(event) {
                const nombre = document.getElementById("nombre").value.trim();
                const fecha_nacimiento = document.getElementById("fecha_nacimiento").value.trim();
                const email = document.getElementById("email").value.trim();
                const password = document.getElementById("password").value.trim();
                const confirm_password = document.getElementById("confirm_password").value.trim();
                const genero = document.getElementById("genero").value;

                if (!nombre || !fecha_nacimiento || !email || !password || !confirm_password) {
                    alert("Por favor, llena todos los campos del formulario.");
                    event.preventDefault(); // Evitar que se envíe el formulario
                } else if (password !== confirm_password) {
                    alert("Las contraseñas no coinciden. Por favor, verifica.");
                    event.preventDefault(); // Evitar que se envíe el formulario
                }
            });
        });
    </script>
</body>
</html>
