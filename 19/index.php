
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones I</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #263238;
            margin: 0;
            padding: 30px 15px;
            line-height: 1.6;
        }

        .contenedor {
            max-width: 950px;
            margin: auto;
        }

        header {
            background: #253b50;
            color: white;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 25px;
        }

        .seccion {
            background: white;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 22px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.06);
        }

        h2 {
            color: #176b87;
            margin-top: 0;
        }

        h3 {
            color: #334e68;
        }

        .codigo {
            background: #202b38;
            color: #e6edf3;
            padding: 18px;
            border-radius: 8px;
            overflow-x: auto;
            margin: 15px 0;
        }

        pre {
            margin: 0;
            white-space: pre-wrap;
            overflow-wrap: anywhere;
            font-size: 14px;
        }

        code {
            font-family: Consolas, monospace;
        }

        .explicacion {
            background: #eaf4f8;
            border-left: 4px solid #2196a8;
            padding: 12px 16px;
            border-radius: 5px;
            margin: 15px 0;
        }

        .resultado {
            background: #eaf7ed;
            border: 1px solid #b7dfbf;
            padding: 15px;
            border-radius: 8px;
            margin-top: 12px;
        }

        .resultado strong {
            color: #246b35;
        }

        .etiqueta {
            display: inline-block;
            background: #dceef4;
            color: #176b87;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .nota {
            background: #fff6df;
            border-left: 4px solid #e5a000;
            padding: 12px 16px;
            border-radius: 5px;
            margin-top: 15px;
        }

        footer {
            text-align: center;
            color: #64748b;
            padding: 15px;
        }
    </style>
</head>

<body>

<div class="contenedor">

    <header>
        <h1>Funciones en PHP</h1>
        <p>Aprendiendo a crear y utilizar funciones.</p>
    </header>

    <!-- 1. FUNCIONES PREDEFINIDAS -->
    <section class="seccion">
        <span class="etiqueta">Ejemplo 1</span>
        <h2>Funciones predefinidas</h2>

        <p>
            PHP dispone de funciones que ya vienen incorporadas en el lenguaje.
            Podemos utilizarlas directamente sin necesidad de declararlas.
        </p>

        <div class="codigo">
            <pre><code>$texto = "Aprendiendo PHP";

echo strlen($texto);
echo strtoupper($texto);
echo strtolower($texto);
echo sqrt(25);</code></pre>
        </div>

        <div class="explicacion">
            <strong>¿Qué hace cada función?</strong>
            <ul>
                <li><code>strlen()</code>: calcula la longitud de un texto en bytes.</li>
                <li><code>strtoupper()</code>: convierte un texto a mayúsculas.</li>
                <li><code>strtolower()</code>: convierte un texto a minúsculas.</li>
                <li><code>sqrt()</code>: calcula la raíz cuadrada de un número.</li>
            </ul>
        </div>

        <div class="resultado">
            <strong>Resultado:</strong>

            <?php
                $texto = "Aprendiendo PHP";
            ?>

            <p>Texto original: <?= htmlspecialchars($texto) ?></p>
            <p>Longitud: <?= strlen($texto) ?> bytes</p>
            <p>Mayúsculas: <?= htmlspecialchars(strtoupper($texto)) ?></p>
            <p>Minúsculas: <?= htmlspecialchars(strtolower($texto)) ?></p>
            <p>Raíz cuadrada de 25: <?= sqrt(25) ?></p>
        </div>
    </section>

    <!-- 2. FUNCION SIN PARAMETROS -->
    <section class="seccion">
        <span class="etiqueta">Ejemplo 2</span>
        <h2>Función propia sin parámetros</h2>

        <p>
            Podemos crear nuestras propias funciones utilizando la palabra
            reservada <code>function</code>.
        </p>

        <div class="codigo">
            <pre><code>function saludar() {
    echo "Hola, bienvenido a PHP";
}

// Llamamos a la función
saludar();</code></pre>
        </div>

        <div class="explicacion">
            <strong>Observa:</strong>
            <ul>
                <li><code>function</code> permite declarar una función.</li>
                <li><code>saludar()</code> es el nombre de la función.</li>
                <li>Las instrucciones se escriben entre llaves.</li>
                <li>Para ejecutarla debemos llamarla mediante su nombre.</li>
            </ul>
        </div>

        <?php
            function saludar() {
                echo "Hola, bienvenido a PHP.";
            }
        ?>

        <div class="resultado">
            <strong>Resultado:</strong>
            <p><?php saludar(); ?></p>
        </div>
    </section>

    <!-- 3. FUNCION CON UN PARAMETRO -->
    <section class="seccion">
        <span class="etiqueta">Ejemplo 3</span>
        <h2>Función con un parámetro</h2>

        <p>
            Los parámetros permiten que una función reciba información
            desde el lugar donde la ejecutamos.
        </p>

        <div class="codigo">
            <pre><code>function saludarPersona($nombre) {
    echo "Hola, " . $nombre;
}

saludarPersona("Carlos");
saludarPersona("Ana");</code></pre>
        </div>

        <div class="explicacion">
            <strong>En este ejemplo:</strong>
            <ul>
                <li><code>$nombre</code> es el parámetro de la función.</li>
                <li><code>"Carlos"</code> y <code>"Ana"</code> son los argumentos enviados.</li>
                <li>La función utiliza cada argumento para construir el mensaje.</li>
            </ul>
        </div>

        <?php
            function saludarPersona($nombre) {
                echo "<p>Hola, " . htmlspecialchars($nombre) . ". Bienvenido.</p>";
            }
        ?>

        <div class="resultado">
            <strong>Resultado:</strong>
            <?php
                saludarPersona("Carlos");
                saludarPersona("Ana");
            ?>
        </div>
    </section>

    <!-- 4. FUNCION CON DOS PARAMETROS -->
    <section class="seccion">
        <span class="etiqueta">Ejemplo 4</span>
        <h2>Función con dos parámetros</h2>

        <p>
            Una función también puede recibir varios parámetros.
            Para separarlos utilizamos comas.
        </p>

        <div class="codigo">
            <pre><code>function sumar($numero1, $numero2) {
    echo $numero1 + $numero2;
}

sumar(10, 5);
sumar(20, 8);
sumar(100, 50);</code></pre>
        </div>

        <div class="explicacion">
            <strong>Observa:</strong>
            <ul>
                <li><code>$numero1</code> recibe el primer valor.</li>
                <li><code>$numero2</code> recibe el segundo valor.</li>
                <li>La función suma ambos valores y muestra el resultado.</li>
            </ul>
        </div>

        <?php
            function sumar($numero1, $numero2) {
                echo "<p>La suma de $numero1 + $numero2 es: ";
                echo $numero1 + $numero2;
                echo "</p>";
            }
        ?>

        <div class="resultado">
            <strong>Resultado:</strong>
            <?php
                sumar(10, 5);
                sumar(20, 8);
                sumar(100, 50);
            ?>
        </div>
    </section>

    <!-- 5. PARAMETROS CON VALORES POR DEFECTO -->
    <section class="seccion">
        <span class="etiqueta">Ejemplo 5</span>
        <h2>Parámetros con valores por defecto</h2>

        <p>
            PHP permite asignar un valor por defecto a los parámetros
            de una función. De esta manera, si al ejecutarla no enviamos
            un argumento para ese parámetro, se utilizará automáticamente
            el valor establecido.
        </p>

        <div class="codigo">
            <pre><code>function presentar($nombre, $edad = 18) {
    echo "Mi nombre es " . $nombre;
    echo " y tengo " . $edad . " años.";
}

// Enviamos los dos argumentos
presentar("Carlos", 25);

// Solo enviamos el primer argumento
presentar("Ana");</code></pre>
        </div>

        <div class="explicacion">
            <strong>En este ejemplo:</strong>
            <ul>
                <li><code>$nombre</code> es un parámetro obligatorio.</li>
                <li><code>$edad</code> tiene asignado el valor por defecto <code>18</code>.</li>
                <li>Si enviamos una edad, se utiliza ese valor.</li>
                <li>Si no enviamos una edad, PHP utiliza automáticamente el valor <code>18</code>.</li>
            </ul>
        </div>

        <?php
            function presentar($nombre, $edad = 18) {
                echo "<p>Mi nombre es " . htmlspecialchars($nombre);
                echo " y tengo " . $edad . " años.</p>";
            }
        ?>

        <div class="resultado">
            <strong>Resultado:</strong>
            <?php
                presentar("Carlos", 25);
                presentar("Ana");
                presentar("Pedro", 32);
            ?>
        </div>

        <div class="nota">
            <strong>Importante:</strong> los parámetros que tienen valores
            por defecto deben colocarse después de los parámetros obligatorios.
            Si enviamos un argumento, este sustituye al valor por defecto.
            Si lo omitimos, se utiliza el valor establecido en la declaración.
        </div>
    </section>

    <!-- RESUMEN -->
    <section class="seccion">
        <h2>Resumen</h2>

        <ul>
            <li>Las funciones agrupan instrucciones para realizar tareas específicas.</li>
            <li>Las funciones predefinidas ya vienen incorporadas en PHP.</li>
            <li>Las funciones propias las creamos utilizando <code>function</code>.</li>
            <li>Para ejecutar una función debemos llamarla mediante su nombre.</li>
            <li>Los parámetros permiten recibir información.</li>
            <li>Los argumentos son los valores que enviamos al ejecutar una función.</li>
            <li>Los parámetros pueden tener valores por defecto.</li>
        </ul>
    </section>

    <footer>
        PHP desde cero · Funciones I
    </footer>

</div>

</body>
</html>
