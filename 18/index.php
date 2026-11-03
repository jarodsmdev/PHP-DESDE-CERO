
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles II</title>
</head>
<body>

    <h1>Bucle For</h1>
    <hr>

    <h2>Ejemplo 1: Bucle for</h2>

    <?php
        for ($i = 0; $i <= 10; $i++) {
            echo "<p>Hemos entrado en el bucle. Iteración: $i</p>";
        }
    ?>

    <hr>

    <h2>Ejemplo 2: Bucle for con break</h2>

    <?php
        for ($i = 0; $i <= 10; $i++) {
            echo "<p>Hemos entrado en el bucle. Iteración: $i</p>";

            if ($i == 6) {
                echo "<p><strong>Bucle interrumpido</strong></p>";
                break;
            }
        }
    ?>

</body>
</html>
