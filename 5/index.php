<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Estáticas</title>
</head>
<body>
    <?php
        function incrementaVariable(){
            static $contador = 0;

            $contador++;

            echo $contador . "<br>";
        }

        incrementaVariable();
        incrementaVariable();
        incrementaVariable();
        incrementaVariable();
    ?>
</body>
</html>