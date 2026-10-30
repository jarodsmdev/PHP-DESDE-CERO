<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Comparación</title>
</head>
<body>
    <a href="operadores.php">Ir a Operadores</a>
    <br>
    <br>
    <?php
        $variable1 = 8; //Numérica
 
        $variable2 = "8"; //String

        $variable3 = "Hugo"; //String

        if($variable1 === $variable2) {
            echo "Son Iguales";
        }else{
            echo "No son iguales";
        }
    ?>
</body>
</html>