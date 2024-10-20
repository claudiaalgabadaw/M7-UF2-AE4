<?php
$restaurantes = ["McDonalds", "Burger King", "KFC"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M7 - UF2 - AE4</title>
</head>
<body>
    <h1>Escoge un restaurante</h1>
    <ul>
        <?php foreach ($restaurantes as $restaurante): ?>
            <li>
                <a href="reservar.php?restaurante=<?= $restaurante ?>">
                    <?= $restaurante ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
