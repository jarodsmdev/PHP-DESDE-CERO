<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
<style>
    .resaltar{
        color: #F00;
        font-weight: bold;
    }
</style>
</head>
<body>
    <?php
        echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";
    ?>

    <?php
        $variable1 = "Casa";
        $variable2 = "CASA";

        // Devuelve 1 cuando NO son iguales, 0 cuando son iguales
        $resultado = strcmp($variable1, $variable2);

        echo "El resultado es $resultado";

        // Devuelve 0 cuando son iguales, no considera mayusculas
        $resultado = strcasecmp($variable1, $variable2);

        echo "El resultado es $resultado";
    ?>
</body>
</html>