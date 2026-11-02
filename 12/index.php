<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones Matemáticas</title>
</head>
<body>
    <h1>Funciones Matemáticas</h1>
    <hr>
     <?php

        $num1 = rand();
        $num2 = rand(10, 50);
        $num3 = pow(6, 3);
        $num4 = 5.25;

        echo "<p>El número aleatorio es: " . $num1 . "</p>";

        echo "<p>El número aleatorio entre 10 y 50: " . $num2 . "</p>";

        echo "<p>6 elevado a 3 es: " . $num3 . "</p>";

        echo "<p>El número " . $num4 . ", redondeado es: " . round($num4) . "</p>";

        echo "<p>El número " . $num4 . ", redondeado a 1 decimal: " . round($num4, 1) . "</p>";

        echo "<p>El número máximo entre 10, 20 y 30 es: " . max(10, 20, 30) . "</p>";

        echo "<p>El número mínimo entre 10, 20 y 30 es: " . min(10, 20, 30) . "</p>";

        echo "<p>El valor de PI es: " . pi() . "</p>";

        echo "<p>La raíz cuadrada de 25 es: " . sqrt(25) . "</p>";

    ?>
</body>
</html>