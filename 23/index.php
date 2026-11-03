<?php

// Incluir el archivo que contiene las clases
include(__DIR__ . "/vehiculos.php");

// Crear objetos de la clase Coche
$renault = new Coche(4, "Rojo", 1600);
$mazda = new Coche(4, "Azul", 2000);

// Crear un objeto de la clase Camion
$pegaso = new Camion();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - POO III</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 30px;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        .contenedor {
            max-width: 1000px;
            margin: auto;
        }

        h1 {
            color: #1d4ed8;
            text-align: center;
            margin-bottom: 10px;
        }

        .introduccion {
            text-align: center;
            color: #64748b;
            margin-bottom: 35px;
        }

        section {
            background: white;
            padding: 25px;
            margin-bottom: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.06);
        }

        h2 {
            color: #1d4ed8;
            border-bottom: 2px solid #dbeafe;
            padding-bottom: 10px;
        }

        h3 {
            color: #334155;
        }

        .codigo {
            background: #0f172a;
            color: #e2e8f0;
            padding: 15px;
            border-radius: 8px;
            overflow-x: auto;
            font-family: Consolas, monospace;
            line-height: 1.6;
        }

        .resultado {
            background: #eff6ff;
            border-left: 4px solid #2563eb;
            padding: 15px;
            border-radius: 6px;
            margin-top: 15px;
        }

        .vehiculos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 15px;
        }

        .vehiculo {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 18px;
            border-radius: 8px;
        }

        .vehiculo h3 {
            margin-top: 0;
            color: #1d4ed8;
        }

        .nota {
            background: #fefce8;
            border-left: 4px solid #eab308;
            padding: 15px;
            border-radius: 6px;
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

        <h1>Programación Orientada a Objetos en PHP</h1>

        <p class="introduccion">
            POO III: constructores con parámetros, clases sin constructor,
            métodos con parámetros, reutilización de código e interpolación.
        </p>


        <!-- SECCIÓN 1 -->
        <section>

            <h2>1. Constructores con parámetros</h2>

            <p>
                Un constructor puede recibir parámetros para establecer
                los valores iniciales de las propiedades de un objeto.
            </p>

            <div class="codigo">
                $renault = new Coche(4, "Rojo", 1600);
            </div>

            <p>En este ejemplo, el objeto Renault recibe:</p>

            <div class="resultado">
                <strong>Valores del Renault:</strong>

                <ul>
                    <li>Ruedas: <?php echo $renault->ruedas; ?></li>
                    <li>Color: <?php echo $renault->color; ?></li>
                    <li>Motor: <?php echo $renault->motor; ?> cc</li>
                </ul>
            </div>

            <p>
                Los valores se reciben en el método
                <strong>__construct()</strong> y se asignan a las propiedades
                mediante <strong>$this</strong>.
            </p>

        </section>


        <!-- SECCIÓN 2 -->
        <section>

            <h2>2. Clases sin constructor</h2>

            <p>
                Una clase puede funcionar sin declarar un constructor.
                En ese caso, PHP permite crear objetos sin enviar parámetros,
                siempre que no exista otro constructor heredado que exija argumentos.
            </p>

            <div class="codigo">
                $pegaso = new Camion();
            </div>

            <div class="resultado">
                <strong>Valores iniciales del camión:</strong>

                <ul>
                    <li>Ruedas: <?php echo $pegaso->ruedas; ?></li>
                    <li>Color: <?php echo $pegaso->color; ?></li>
                    <li>Motor: <?php echo $pegaso->motor; ?> cc</li>
                </ul>
            </div>

            <p>
                Los valores se establecieron directamente en las propiedades
                de la clase Camion.
            </p>

        </section>


        <!-- SECCIÓN 3 -->
        <section>

            <h2>3. Métodos con parámetros</h2>

            <p>
                Los métodos también pueden recibir parámetros para realizar
                operaciones con los objetos.
            </p>

            <div class="codigo">
                $mazda->establece_color("Verde");
            </div>

            <div class="resultado">
                <strong>Resultado:</strong>

                <?php
                $mazda->establece_color("Verde");
                ?>

                <p>
                    Nuevo color del Mazda:
                    <strong><?php echo $mazda->color; ?></strong>
                </p>
            </div>

            <p>
                El método recibe el color como parámetro y modifica
                la propiedad color del objeto que lo ejecuta.
            </p>

        </section>


        <!-- SECCIÓN 4 -->
        <section>

            <h2>4. Reutilización de código con include()</h2>

            <p>
                Podemos guardar nuestras clases en un archivo independiente
                y utilizar <strong>include()</strong> para incorporarlas
                en otro archivo PHP.
            </p>

            <div class="codigo">
                include("/vehiculos.php");
            </div>

            <p>
                De esta manera, no necesitamos volver a escribir las clases
                en index.php.
            </p>

            <div class="nota">
                <strong>Importante:</strong>
                <p>
                    La función include() incorpora el contenido de otro archivo.
                    Si no encuentra el archivo, genera una advertencia y
                    normalmente permite que el resto del código continúe.
                </p>
            </div>

            <h3>Estructura de los archivos</h3>

            <div class="codigo">
                POO_III/<br>
                ├── index.php<br>
                └── vehiculos.php
            </div>

        </section>


        <!-- SECCIÓN 5 -->
        <section>

            <h2>5. Interpolación de variables</h2>

            <p>
                La interpolación permite insertar variables directamente
                dentro de una cadena de texto utilizando comillas dobles.
            </p>

            <?php
            $nombre = "Renault";
            ?>

            <div class="codigo">
                $nombre = "Renault";<br>
                echo "El vehículo es un $nombre";
            </div>

            <div class="resultado">
                <strong>Resultado:</strong>

                <?php
                echo "<p>El vehículo es un $nombre</p>";
                ?>
            </div>

            <h3>Interpolación de propiedades de objetos</h3>

            <p>
                También podemos utilizar llaves para delimitar una expresión
                que accede a una propiedad de un objeto.
            </p>

            <div class="codigo">
                echo "El camión es de color {$pegaso->color}";
            </div>

            <div class="resultado">
                <strong>Resultado:</strong>

                <?php
                echo "<p>El camión es de color {$pegaso->color}</p>";
                ?>
            </div>

            <div class="nota">
                <strong>Recuerda:</strong>
                <p>
                    La interpolación funciona con comillas dobles.
                    Las comillas simples no interpretan las variables:
                    las muestran como texto literal.
                </p>
            </div>

        </section>


        <!-- RESUMEN -->
        <section>

            <h2>Resumen</h2>

            <ul>
                <li>Los constructores pueden recibir parámetros.</li>
                <li>Una clase puede no declarar un constructor.</li>
                <li>Los métodos pueden recibir parámetros.</li>
                <li><strong>include()</strong> permite reutilizar código de otros archivos.</li>
                <li>La interpolación inserta variables en cadenas de texto.</li>
                <li><strong>$this</strong> permite acceder al objeto actual desde la clase.</li>
            </ul>

        </section>


        <footer>
            PHP desde cero - Programación Orientada a Objetos III
        </footer>

    </div>

</body>

</html>