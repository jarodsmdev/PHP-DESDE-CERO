
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>POO IV: Herencia</title>

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
        }

        .introduccion {
            text-align: center;
            color: #64748b;
            margin-bottom: 30px;
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

        .nota {
            background: #fefce8;
            border-left: 4px solid #eab308;
            padding: 15px;
            border-radius: 6px;
            margin-top: 15px;
        }

        .diagrama {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            padding: 20px;
            background: #f8fafc;
            border-radius: 8px;
        }

        .clase {
            width: 220px;
            padding: 15px;
            text-align: center;
            border-radius: 8px;
            font-weight: bold;
        }

        .superclase {
            background: #dbeafe;
            border: 2px solid #2563eb;
        }

        .subclase {
            background: #dcfce7;
            border: 2px solid #16a34a;
        }

        .flecha {
            font-size: 25px;
            color: #64748b;
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
        POO IV: Herencia, superclases, subclases y reutilización de código.
    </p>


    <!-- SECCIÓN 1 -->
    <section>

        <h2>1. ¿Qué es la herencia?</h2>

        <p>
            La herencia es una característica de la programación
            orientada a objetos que permite crear una clase nueva
            a partir de otra clase existente.
        </p>

        <p>
            La clase nueva hereda las propiedades y los métodos
            accesibles de la clase original. De esta manera,
            podemos reutilizar código y agregar o modificar
            funcionalidades.
        </p>

        <h3>Finalidad de la herencia</h3>

        <ul>
            <li>Reutilizar código existente.</li>
            <li>Evitar repetir propiedades y métodos.</li>
            <li>Organizar las clases mediante relaciones.</li>
            <li>Ampliar o modificar funcionalidades de una clase.</li>
        </ul>

        <h3>Representación de la herencia</h3>

        <div class="diagrama">

            <div class="clase superclase">
                Superclase: Coche
            </div>

            <div class="flecha">↓</div>

            <div class="clase subclase">
                Subclase: Camion
            </div>

        </div>

        <div class="nota">
            <strong>Importante:</strong>
            <p>
                En este ejemplo, Camion hereda de Coche.
                Esto significa que Camion puede utilizar las
                propiedades y los métodos públicos o protegidos
                definidos en Coche.
            </p>
        </div>

    </section>


    <!-- SECCIÓN 2 -->
    <section>

        <h2>2. Superclases y subclases</h2>

        <p>
            En la herencia encontramos dos conceptos principales:
        </p>

        <h3>Superclase</h3>

        <p>
            Es la clase original que proporciona propiedades
            y métodos para que otras clases puedan heredarlos.
        </p>

        <p>
            En nuestro ejemplo, <strong>Coche</strong> es la superclase.
        </p>

        <div class="codigo">
            class Coche {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;public int $ruedas;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;public string $color;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;public int $motor;<br>
            }
        </div>

        <h3>Subclase</h3>

        <p>
            Es la clase que hereda las propiedades y los métodos
            de otra clase. También puede incorporar sus propias
            propiedades y métodos.
        </p>

        <p>
            En nuestro ejemplo, <strong>Camion</strong> es la subclase.
        </p>

        <div class="codigo">
            class Camion extends Coche {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;// Contenido de la clase Camion<br>
            }
        </div>

        <div class="nota">
            <strong>La palabra clave extends:</strong>
            <p>
                Se utiliza para indicar que una clase hereda de otra.
                En este caso, Camion extiende a Coche.
            </p>
        </div>

    </section>


    <!-- SECCIÓN 3 -->
    <section>

        <h2>3. Reutilización de código</h2>

        <p>
            Una de las principales ventajas de la herencia es que
            podemos utilizar en una subclase los métodos y propiedades
            definidos en su superclase, sin tener que escribirlos
            nuevamente.
        </p>

        <p>
            Por ejemplo, la clase Coche tiene los métodos
            <strong>arrancar()</strong>, <strong>girar()</strong>
            y <strong>frenar()</strong>.
        </p>

        <p>
            Como Camion hereda de Coche, también puede utilizar
            esos métodos.
        </p>

        <div class="codigo">
            $pegaso = new Camion();<br><br>

            $pegaso->girar();<br>
            $pegaso->frenar();
        </div>

        <div class="resultado">

            <strong>Resultado:</strong>

            <?php
                $pegaso = new Camion();

                $pegaso->girar();
                $pegaso->frenar();
            ?>

        </div>

    </section>


    <!-- SECCIÓN 4 -->
    <section>

        <h2>4. Sobrescritura de métodos</h2>

        <p>
            La sobrescritura de métodos ocurre cuando una subclase
            define un método que ya existe en su superclase,
            proporcionando una implementación propia.
        </p>

        <p>
            En nuestro ejemplo, tanto Coche como Camion tienen
            un método llamado <strong>establece_color()</strong>,
            pero cada clase muestra un mensaje diferente.
        </p>

        <div class="codigo">
            // Dentro de la clase Camion<br><br>

            public function establece_color(string $color) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;$this->color = $color;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "El color del camión es {$this->color}";<br>
            }
        </div>

        <div class="resultado">

            <strong>Resultado:</strong>

            <?php
                $pegaso->establece_color("Azul");
            ?>

        </div>

        <p>
            Aunque Camion hereda el método establece_color()
            de Coche, utiliza su propia versión porque lo ha
            sobrescrito.
        </p>

    </section>


    <!-- SECCIÓN 5 -->
    <section>

        <h2>5. Instrucción parent</h2>

        <p>
            La palabra clave <strong>parent</strong> permite acceder
            a métodos de la superclase desde una subclase.
        </p>

        <p>
            En este ejemplo, Camion sobrescribe el método
            arrancar(), pero utiliza parent::arrancar() para
            ejecutar primero el método original de Coche.
        </p>

        <div class="codigo">
            public function arrancar() {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;parent::arrancar();<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "Camión arrancado";<br>
            }
        </div>

        <div class="resultado">

            <strong>Resultado:</strong>

            <?php
                $pegaso->arrancar();
            ?>

        </div>

        <div class="nota">
            <strong>Recuerda:</strong>
            <p>
                parent::arrancar() ejecuta el método arrancar()
                definido en la superclase Coche.
                Después se ejecuta el código adicional de Camion.
            </p>
        </div>

    </section>


    <!-- SECCIÓN 6 -->
    <section>

        <h2>6. Ejemplo completo de herencia</h2>

        <p>
            Ahora crearemos un objeto de cada clase para observar
            cómo funcionan sus propiedades y métodos.
        </p>

        <?php
            $mazda = new Coche();
            $mazda->establece_color("Verde");

            $pegaso = new Camion();
        ?>

        <div class="resultado">

            <h3>Objeto de la clase Coche</h3>

            <p>
                El coche es de color
                <strong><?php echo $mazda->color; ?></strong>
                y tiene
                <strong><?php echo $mazda->ruedas; ?></strong>
                ruedas.
            </p>

            <h3>Objeto de la clase Camion</h3>

            <p>
                El camión es de color
                <strong><?php echo $pegaso->color; ?></strong>
                y tiene
                <strong><?php echo $pegaso->ruedas; ?></strong>
                ruedas.
            </p>

        </div>

    </section>


    <!-- RESUMEN -->
    <section>

        <h2>Resumen</h2>

        <ul>
            <li>La herencia permite crear clases a partir de otras clases.</li>
            <li>La superclase es la clase de la que se hereda.</li>
            <li>La subclase es la clase que hereda.</li>
            <li>La palabra clave extends establece la herencia.</li>
            <li>La herencia permite reutilizar propiedades y métodos.</li>
            <li>La sobrescritura permite redefinir un método heredado.</li>
            <li>parent permite acceder a métodos de la superclase.</li>
        </ul>

    </section>


    <footer>
        PHP desde cero - Programación Orientada a Objetos IV
    </footer>

</div>

</body>
</html>
