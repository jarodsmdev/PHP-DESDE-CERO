<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Matemáticos III</title>
</head>
<body>
    <h1>Operadores Matemáticos III</h1>
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
                <option value="Incremento">Incremento</option>
                <option value="Decremento">Decremento</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Enviar" name="button" id="button">
        </p>
    </form>
    <p>&nbsp;</p>
    <?php
        include("calculadora.php");

        if(isset($_POST["button"])){
            $numero1 = $_POST["num1"];
            $numero2 = $_POST["num2"];
            $operacion = $_POST["operacion"];

            calcular($operacion, $numero1, $numero2);
        }
    ?>
</body>
</html>