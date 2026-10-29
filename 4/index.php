<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ámbito de las variables</title>
</head>
<body>
    <?php
        $nombre = "Pedro";

        include("datos_otros.php");

        otroNombre();

        echo $nombre;
    ?>
</body>
</html>