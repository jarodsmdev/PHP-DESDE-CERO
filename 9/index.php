<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Matemáticos I</title>
</head>
<body>
    <h1>Operadores Matemáticos I</h1>
    <hr>
    <p>&nbsp;</p>
    <form action="" method="POST" name="form1">
        <p>
            <label for="num1"></label>
            <input type="text" name="num1" id="num1">
            <label for="num2"></label>
            <input type="text" name="num2" id="num2">
            <label for="operacion"></label>
            <select name="operacion" id="operacion">
                <option value="">Seleccione</option>
                <option value="Suma">Suma</option>
                <option value="Resta">Resta</option>
                <option value="Multiplicacion">Multiplicación</option>
                <option value="Division">División</option>
                <option value="Modulo">Módulo</option>
                <option value="Potencia">Potencia</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Enviar" name="button" id="button" onClick="prueba">
        </p>
    </form>
    <p>&nbsp;</p>

    <?php
        if(isset($_POST["button"])){
            $numero1 = $_POST["num1"];
            $numero2 = $_POST["num2"];
            $operacion = $_POST["operacion"];

            //Si no son distintos -> Son iguales
            if(!strcmp("Suma", $operacion)){
                echo "El resultado es: " . ($numero1 + $numero2);
            }
            if(!strcmp("Resta", $operacion)){
                echo "El resultado es: " . ($numero1 - $numero2);
            }
            if(!strcmp("Multiplicacion", $operacion)){
                echo "El resultado es: " . ($numero1 * $numero2);
            }
            if(!strcmp("Division", $operacion)){
                echo "El resultado es: " . ($numero1 / $numero2);
            }
            if(!strcmp("Modulo", $operacion)){
                echo "El resultado es: " . ($numero1 % $numero2);
            }
            if(!strcmp("Potencia", $operacion)){
                echo "El resultado es: " . ($numero1 ** $numero2);
            }
        }
    ?>
</body>
</html>