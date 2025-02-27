<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Reserva Automa</title>
    <style>
       
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #9cbdeb;
        }

        form {
            background-color: #92cdfa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        
    </style>
</head>
<body>

    <form action="/enviar" method="post">
        <h1>Sistema de Reserva Automa</h1>
        
        <label for="nombre">usuario:</label>
        <input type="text" id="nombre" name="nombre"  placeholder="Escriba su usuario" required>
        
        
        
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password"  placeholder="Escriba su contraseña" required>
        
      
        
        <button><a href="{{route('dos.index')}}">ingresar</a></button>

    </form>

</body>
</html>
