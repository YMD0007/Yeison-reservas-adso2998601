<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        input[type="email"] {
            font-size: 16px;
            margin-bottom: 5px;
            display: block;
            text-align: center        }
        label {
            font-size: 16px;
            margin-bottom: 5px;
            display: block;
            text-align: center
        }
        input[type="email"],
        .container {
            width: 80%;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #2e76c7;
            color: white;
            border: none;
            text-align: center
            cursor: pointer;
        }
       
    </style>
</head>
<body>

    <div class="container">
        <h2>solicitudes pendientes</h2>
        <table>
            
                <tr>
                    <th>solicitud</th>
                    <th>Fecha</th>
                    <th>solicitante</th>
                    <th>usuario</th>
                    <th>tiempo de espera</th>

            
                <tr>
                    <td>Reserva de aula</td>
                    <td>2025-02-20 10:00</td>
                    <td>maestro</td>
                    <td>9191919191</td>
                    <td>5 dias habiles</td>

                </tr>
                <tr>
                    <td>Reserva de cubiculo</td>
                    <td>2025-02-22 14:30</td>
                    <td>aprendiz</td>
                    <td>9801725347</td>
                    <td>3 dias</td>

                </tr>
            
        </table>
    </div>
    <label for="ingrese su correo electronico">ingrese su correo electronico para cancelar</label>
    <input type="email" id="correo" name="correo" required>
    <br><br>
    <button><a href="{{route('usuario.create')}}">confirmar cancelacion</a></button> 
    

</body>
</html>
