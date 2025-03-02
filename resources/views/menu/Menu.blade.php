<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página para reservas de lugares y gestión de solicitudes.">
    <title>Menú Interactivo</title>
    <style>
        

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #4c76c9; 
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            font-size: 30px;
            margin: 0;
        }

        
        nav {
            display: flex;
            justify-content: center;
            background-color: #333;
            position: relative;
        }

        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
            font-size: 18px;
            display: block;
            transition: background-color 0.3s, color 0.3s;
        }

        nav a:hover {
            background-color: #4954b4;
            color: #fff;
        }

        
        nav .dropdown {
            position: relative;
        }

        nav .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            z-index: 1;
        }

        nav .dropdown:hover .dropdown-content {
            display: block;
        }

        nav .dropdown-content a {
            padding: 12px 16px;
            color: white;
            text-align: left;
        }

        nav .dropdown-content a:hover {
            background-color: #345aa0;
        }

        
        .content {
            text-align: center;
            padding: 50px 20px;
        }

        .content h2 {
            font-size: 24px;
            margin: 20px 0;
            color: #333;
        }

        .content p {
            font-size: 18px;
            color: #666;
        }

    </style>
</head>
<body>

    <header>
        <h1>Bienvenido a la Página de Reserva</h1>
    </header>

    <nav>
        <a href="{{route('home.index')}}">Reservar Lugar</a>
        <a href="{{route('reservas.index')}}">Solicitudes</a>

        
        <div class="dropdown">
            <a href="#">Más Opciones</a>
            <div class="dropdown-content">
                <a href="{{route('home.create')}}">Historial</a>
                <a href="#">Contacto</a>
                <a href="#">Ayuda</a>
            </div>
        </div>
    </nav>

    <div class="content">
        <h2>Haz clic en las opciones anteriores según tu interés.</h2>
        <p>Explora las opciones del menú y gestiona tus reservas y solicitudes.</p>
    </div>

</body>
</html>

