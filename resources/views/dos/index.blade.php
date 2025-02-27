<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Básico</title>
    <style>
       
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
        }

        
        header {
            background-color: #338fc1; 
            color: white; 
            padding: 15px 0;
            text-align: center;
        }

        header h1 {
            font-size: 28px;
            margin: 0;
        }

        
        nav {
            display: flex;
            justify-content: center;
            background-color: #333;
        }

        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
            font-size: 18px;
            display: flex;
            width: 150px;
          
        }

        
        nav a:hover {
            background-color: #4068e9;
        }

  
        .content {
            text-align: center;
        }
    </style>
</head>
<body>

    
    <header>
        <h1>bienvenido a la pagina de reserva</h1>
    </header>

    <nav>
        <a href="{{route('primer.index')}}">reservar lugar</a>
        <a href="{{route('reservas.index')}}">Solicitudes</a>
        <a href="{{route('primer.create')}}">Historial</a>
    </nav>

    
    <div class="content">
        <h2>dale click en las opciones superiores segun tu interes</h2>
    </div>

</body>
</html>
