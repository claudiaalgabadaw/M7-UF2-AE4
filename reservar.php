<?php
$restaurante = $_GET['restaurante'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M7 - UF2 - AE4</title>
</head>
<body>
    <h1>Formulario de reserva <?= $restaurante ?></h1>
    <form action="javascript:alert('Reserva realizada correctamente.');window.location.assign('index.php');" method="POST">
        <label for="restaurante">Restaurante:</label>
        <input type="text" id="restaurante" name="restaurante" value="<?= $restaurante ?>" readonly required>
        <br>
        <label for="fecha">Fecha de la reserva:</label>
        <input type="date" id="fecha" name="fecha" required>
        <br>
        <label for="personas">Número de personas:</label>
        <input type="number" id="personas" name="personas" min="1" required>
        <br>
        <button type="submit">Reservar</button>
    </form>
</body>
</html>
