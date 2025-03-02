<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Reserva</title>
    <style>
        body {
            
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
        }
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-size: 16px;
            margin-bottom: 5px;
            display: block;
        }
        input[type="text"],
        input[type="date"],
        select,
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .radio-group {
            display: flex;
            justify-content: space-around;
            margin-bottom: 15px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #18427e;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Formulario de Reserva de Espacio</h2>
        <form action="/procesar-reserva" method="POST">
        

            <label for="nombre">Nombre Completo</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" required>

            <label for="espacio">Seleccione el espacio a reservar</label>
            <select id="espacio" name="espacio" required>
                <option value="cubiculo">Cubículo</option>
                <option value="salon_clase">Salón de Clase</option>
                <option value="sala_estudio">Sala de Estudio</option>
            </select>

      
            <label for="fecha">Fecha de Reserva</label>
            <input type="date" id="fecha" name="fecha" required>
          
            <label for="hora">Hora de Reserva</label>
            <input type="time" id="hora" name="hora" required>

            
            <label>Tipo de Reservante</label>
            <div class="radio-group">
                <label>
                    <input type="radio" name="tipo_reservante" value="estudiante" required>
                    Estudiante
                </label>
                <label>
                    <input type="radio" name="tipo_reservante" value="docente">
                    Docente
                </label>
            </div>

        
            <button type="submit">Reservar</button>
        </form>
    </div>

</body>
</html>
