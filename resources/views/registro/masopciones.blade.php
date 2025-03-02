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
        .container {
            width: 80%;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Historial de Reservas</h2>
        <table>
            
                <tr>
                    <th>Evento</th>
                    <th>Fecha</th>
                    <th>Usuario</th>
                    <th>Identificacion</th>
                    <th>Hora_inicio</th>
                    <th>Hora_fin</th>
                </tr>
            
                <tr>
                    <td>Reserva de Cubículo</td>
                    <td>2025-02-20 10:00</td>
                    <td>Aprendiz</td>
                    <td>1028374758</td>
                    <td>1:00 pm</td>
                    <td>4:50 pm</td>

                </tr>
                <tr>
                    <td>Reserva de Sala de Estudio</td>
                    <td>2025-02-22 14:30</td>
                    <td>Maestro</td>
                    <td>8282282828</td>
                    <td>10:00 am</td>
                    <td>1:50 pm</td>

                </tr>
            
        </table>
    </div>

</body>
</html>
