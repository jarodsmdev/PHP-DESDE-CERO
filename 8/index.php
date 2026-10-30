<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso Constantes</title>
</head>
<body>
    <h1>Constantes</h1>
    <hr>
    <?php
        // Definir una constante general
        define("AUTOR", "MARIO");

        echo AUTOR;

        echo "<br>El autor es: ". AUTOR . "<br>";

        echo "<br>La versión de PHP es: " . PHP_VERSION;

        echo "<br>La línea de esta instrucción es: " . __LINE__;

        echo "<br>Estamos trabajando con el file: " . __FILE__;
    ?>


    <?php
        // Constante declarada dentro de una clase
        class Datos{
            const MI_AUTOR = "Pedro";
        }

        echo "<br>El autor de la clase es: " . Datos::MI_AUTOR;

    ?>
</body>
</html>