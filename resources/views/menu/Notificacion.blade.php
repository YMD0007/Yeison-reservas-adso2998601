<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notificación de Cancelación</title>
  <style>
    .notificacion {
      background-color: #f8d7da;
      color: #721c24;
      border: 1px solid #f5c6cb;
      padding: 15px;
      margin: 20px 0;
      border-radius: 5px;
      font-family: Arial, sans-serif;
      font-size: 16px;
      width: 300px;
    }
    .notificacion .cerrar {
      float: right;
      font-size: 18px;
      font-weight: bold;
      color: #721c24;
      cursor: pointer;
    }
    .notificacion .cerrar:hover {
      color: #f44336;
    }
  </style>
</head>
<body>

  <div class="notificacion">
    <span class="cerrar" onclick="this.parentElement.style.display='none'">&times;</span>
    <strong>Atencionnnnn!</strong>
    <br> Su Reserva Ha Sido Cancelada.
  </div>

</body>
</html>
