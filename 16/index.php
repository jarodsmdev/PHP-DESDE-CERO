
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo Match en PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f3f5;
            margin: 0;
            padding: 25px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .contenedor {
            max-width: 750px;
            margin: 20px auto;
        }

        .ejemplo {
            background: white;
            padding: 22px;
            margin-bottom: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px #00000015;
        }

        h2 {
            color: #2457a6;
            margin-top: 0;
        }

        label {
            display: block;
            margin: 12px 0 6px;
            font-weight: bold;
        }

        select, button {
            padding: 10px;
            font-size: 15px;
            border-radius: 5px;
        }

        select {
            width: 100%;
            border: 1px solid #aaa;
        }

        button {
            margin-top: 15px;
            background: #2457a6;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #173d78;
        }

        pre {
            background: #272822;
            color: #f8f8f2;
            padding: 15px;
            border-radius: 6px;
            overflow-x: auto;
            line-height: 1.5;
        }

        .resultado {
            background: #e5f5e9;
            border-left: 5px solid #24964b;
            padding: 12px;
            margin-top: 18px;
            font-size: 17px;
        }

        .explicacion {
            color: #555;
            font-size: 14px;
        }
    </style>
</head>

<body>

<h1>Expresión Match en PHP</h1>

<div class="contenedor">

    <!-- EJEMPLO 1 -->
    <div class="ejemplo">

        <h2>Ejemplo 1: Estados de un proceso</h2>

        <p>Selecciona un estado y observa qué resultado devuelve MATCH.</p>

        <form method="POST">

            <label>Selecciona un estado:</label>

            <select name="estado">
                <option value="1" <?= ($_POST["estado"] ?? "") === "1" ? "selected" : "" ?>>1 - Pendiente</option>
                <option value="2" <?= ($_POST["estado"] ?? "") === "2" ? "selected" : "" ?>>2 - En proceso</option>
                <option value="3" <?= ($_POST["estado"] ?? "") === "3" ? "selected" : "" ?>>3 - Completado</option>
                <option value="4" <?= ($_POST["estado"] ?? "") === "4" ? "selected" : "" ?>>4 - Otro estado</option>
            </select>

            <button type="submit" name="ejemplo1">Ejecutar Match</button>

        </form>

        <pre>$resultado = match ($estado) {
    1 => "pendiente",
    2 => "en proceso",
    3 => "completado",
    default => "desconocido",
};</pre>

        <?php
        if (isset($_POST["ejemplo1"])) {

            $estado = (int) $_POST["estado"];

            $resultado = match ($estado) {
                1 => "pendiente",
                2 => "en proceso",
                3 => "completado",
                default => "desconocido",
            };

            echo "<div class='resultado'>";
            echo "<strong>Valor evaluado:</strong> $estado<br>";
            echo "<strong>Resultado:</strong> $resultado";
            echo "</div>";
        }
        ?>

    </div>


    <!-- EJEMPLO 2 -->
    <div class="ejemplo">

        <h2>Ejemplo 2: Días laborales y fin de semana</h2>

        <p>Selecciona un día de la semana. Varios valores pueden devolver el mismo resultado.</p>

        <form method="POST">

            <label>Selecciona un día:</label>

            <select name="dia">
                <?php
                $dias = [
                    1 => "Lunes",
                    2 => "Martes",
                    3 => "Miércoles",
                    4 => "Jueves",
                    5 => "Viernes",
                    6 => "Sábado",
                    7 => "Domingo",
                    8 => "Día no válido"
                ];

                foreach ($dias as $numero => $nombre) {
                    $seleccionado = ($_POST["dia"] ?? "") == $numero ? "selected" : "";
                    echo "<option value='$numero' $seleccionado>$nombre</option>";
                }
                ?>
            </select>

            <button type="submit" name="ejemplo2">Ejecutar Match</button>

        </form>

        <pre>$resultado = match ($dia) {
    1, 2, 3, 4, 5 => "Día laboral",
    6, 7 => "Fin de semana",
    default => "Día no válido",
};</pre>

        <?php
        if (isset($_POST["ejemplo2"])) {

            $dia = (int) $_POST["dia"];

            $resultado = match ($dia) {
                1, 2, 3, 4, 5 => "Día laboral",
                6, 7 => "Fin de semana",
                default => "Día no válido",
            };

            echo "<div class='resultado'>";
            echo "<strong>Día seleccionado:</strong> " . htmlspecialchars($dias[$dia]) . "<br>";
            echo "<strong>Valor evaluado:</strong> $dia<br>";
            echo "<strong>Resultado:</strong> $resultado";
            echo "</div>";
        }
        ?>

    </div>


    <!-- EJEMPLO 3 -->
    <div class="ejemplo">

        <h2>Ejemplo 3: Comparación estricta</h2>

        <p>Selecciona un valor numérico o una cadena de texto que represente un número.</p>

        <form method="POST">

            <label>Selecciona un tipo de dato:</label>

            <select name="numero">
                <option value="entero">Número entero: 2</option>
                <option value="texto">Texto: "2"</option>
                <option value="uno">Número entero: 1</option>
                <option value="tres">Número entero: 3</option>
            </select>

            <button type="submit" name="ejemplo3">Ejecutar Match</button>

        </form>

        <pre>$resultado = match ($numero) {
    1 => "Es el número uno",
    2 => "Es el número dos",
    "2" => "Es el texto dos",
    default => "No coincide",
};</pre>

        <?php
        if (isset($_POST["ejemplo3"])) {

            $numero = match ($_POST["numero"]) {
                "entero" => 2,
                "texto" => "2",
                "uno" => 1,
                "tres" => 3,
                default => null,
            };

            $resultado = match ($numero) {
                1 => "Es el número uno",
                2 => "Es el número dos",
                "2" => "Es el texto dos",
                default => "No coincide",
            };

            echo "<div class='resultado'>";
            echo "<strong>Valor evaluado:</strong> " . htmlspecialchars((string)$numero) . "<br>";
            echo "<strong>Tipo de dato:</strong> " . gettype($numero) . "<br>";
            echo "<strong>Resultado:</strong> $resultado";
            echo "</div>";
        }
        ?>

    </div>


    <!-- EJEMPLO 4 -->
    <div class="ejemplo">

        <h2>Ejemplo 4: Evaluación de múltiples valores</h2>

        <p>
            Selecciona un día de la semana. Observa cómo varios valores
            pueden devolver un mismo resultado.
        </p>

        <form method="POST">

            <label>Selecciona un día:</label>

            <select name="dia_multiple">

                <?php
                $dias_multiple = [
                    1 => "Lunes",
                    2 => "Martes",
                    3 => "Miércoles",
                    4 => "Jueves",
                    5 => "Viernes",
                    6 => "Sábado",
                    7 => "Domingo",
                    8 => "Otro día"
                ];

                foreach ($dias_multiple as $numero => $nombre) {

                    $seleccionado = ($_POST["dia_multiple"] ?? "") == $numero
                        ? "selected"
                        : "";

                    echo "<option value='$numero' $seleccionado>$nombre ($numero)</option>";
                }
                ?>

            </select>

            <button type="submit" name="ejemplo4">
                Ejecutar Match
            </button>

        </form>

        <pre>$resultado = match ($dia) {
    1, 2, 3, 4, 5 => "Día laboral",
    6, 7 => "Fin de semana",
    default => "Día no válido",
};</pre>

        <?php
        if (isset($_POST["ejemplo4"])) {

            $dia = (int) $_POST["dia_multiple"];

            $resultado = match ($dia) {
                1, 2, 3, 4, 5 => "Día laboral",
                6, 7 => "Fin de semana",
                default => "Día no válido",
            };

            echo "<div class='resultado'>";
            echo "<strong>Día seleccionado:</strong> " . htmlspecialchars($dias_multiple[$dia]) . "<br>";
            echo "<strong>Valor evaluado:</strong> $dia<br>";
            echo "<strong>Resultado:</strong> $resultado";
            echo "</div>";
        }
        ?>

    </div>

</div>

</body>
</html>
