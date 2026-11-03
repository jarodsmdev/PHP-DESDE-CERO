<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Priordad Operadores</title>
</head>
<body>
    <h1>Prioridad de Operadores</h1>
    <hr>
    <a href="condicionales.php">Ejemplo de condicionales</a>
    <div></div>
    <br>
    <?php
        $var1 = true;
        $var2 = false;

        $resultado = $var1 AND $var2; // false

        if($resultado == true){
            echo "Correcto";
        }else{
            echo "Incorrecto";
        }
    ?>
</body>
</html>