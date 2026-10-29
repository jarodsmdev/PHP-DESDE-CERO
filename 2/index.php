<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios y Variables</title>
</head>
<body>
    <?php
        // Comentario de una línea
        print "Esto es un texto con print <br>";

        /*
        Comentario de
        varias líneas
        */

        print "Crear variables <br>";
        $nombre; // Declarar una variable de tipo String
        $nombre = "Pedro"; //Inicializar la variable

        echo $nombre; //
        echo "<br>";

        $nombre = "Juan"; //Reasignación de variable

        $edad = 18; // Declara una variable de tipo Integer

        /* Concatenar texto con variables */
        print "El nombre del usuario es $nombre y su edad es $edad";

        /*
        print es una función
        echo es una expresión
        */
    ?>
</body>
</html>