<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flujo de Ejecución</title>
</head>
<body>

    <?php
        // Primer bloque PHP
        function dameDatos(){
            echo "Este es el mensaje del interior de la función <br>";
        }
    ?>


    <?php
        // Segundo bloque PHP
        echo "Este es el primer mensaje <br>";

        echo dameDatos();
        
        echo "Este es el segundo mensaje <br>";

        include("proporciona_datos.php");

        saludar();
    ?>
</body>
</html>