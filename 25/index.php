
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>POO VI: Modificadores de Acceso II</title>

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
        POO VI: Modificadores de Acceso II - Getters y Setters.
    </p>


    <!-- SECCIÓN 1 -->
    <section>

        <h2>1. Acceso a propiedades protegidas</h2>

        <p>
            Las propiedades declaradas como protected no pueden
            consultarse directamente desde fuera de la clase.
            Para acceder a ellas podemos utilizar métodos públicos.
        </p>

        <div class="codigo">
            protected int $ruedas;<br><br>

            public function get_ruedas() {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;return $this->ruedas;<br>
            }
        </div>

        <?php
            include("vehiculo.php");

            $coche1 = new Coche();
            $camion1 = new Camion();
        ?>

        <div class="resultado">

            <strong>Resultados:</strong>

            <p>
                El coche tiene
                <strong><?php echo $coche1->get_ruedas(); ?></strong>
                ruedas.
            </p>

            <p>
                El camión tiene
                <strong><?php echo $camion1->get_ruedas(); ?></strong>
                ruedas.
            </p>

        </div>

        <div class="nota">
            <strong>Importante:</strong>
            <p>
                get_ruedas() es un método público que devuelve
                el valor de la propiedad protegida ruedas.
                Como Camion hereda de Coche, también puede utilizar
                este método.
            </p>
        </div>

    </section>


    <!-- SECCIÓN 2 -->
    <section>

        <h2>2. Getters: consultar propiedades</h2>

        <p>
            Los getters son métodos que permiten obtener o consultar
            el valor de una propiedad de un objeto.
        </p>

        <p>
            Normalmente se declaran como public para poder utilizarlos
            desde fuera de la clase.
        </p>

        <div class="codigo">
            public function get_motor() {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;return $this->motor;<br>
            }
        </div>

        <div class="resultado">

            <strong>Consultar el motor de los vehículos:</strong>

            <p>
                Motor del coche:
                <strong><?php echo $coche1->get_motor(); ?> cc</strong>
            </p>

            <p>
                Motor del camión:
                <strong><?php echo $camion1->get_motor(); ?> cc</strong>
            </p>

        </div>

    </section>


    <!-- SECCIÓN 3 -->
    <section>

        <h2>3. Setters: modificar propiedades</h2>

        <p>
            Los setters son métodos que permiten modificar el valor
            de una propiedad de un objeto.
        </p>

        <p>
            Generalmente reciben un parámetro con el nuevo valor
            que queremos asignar a la propiedad.
        </p>

        <div class="codigo">
            public function set_ruedas(int $ruedas) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;$this->ruedas = $ruedas;<br>
            }
        </div>

        <?php
            $coche1->set_ruedas(6);
        ?>

        <div class="resultado">

            <strong>Resultado después de modificar las ruedas:</strong>

            <p>
                El coche ahora tiene
                <strong><?php echo $coche1->get_ruedas(); ?></strong>
                ruedas.
            </p>

        </div>

    </section>


    <!-- SECCIÓN 4 -->
    <section>

        <h2>4. Getters y setters con propiedades heredadas</h2>

        <p>
            Como Camion hereda de Coche, puede utilizar los métodos
            públicos get_ruedas(), get_motor() y get_color(),
            así como los setters heredados.
        </p>

        <p>
            Además, puede sobrescribir un método para proporcionar
            un comportamiento diferente.
        </p>

        <div class="codigo">
            public function set_color(string $color) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;$this->color = $color;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "El color del camión es {$this->color}";<br>
            }
        </div>

        <div class="resultado">

            <strong>Modificar el color del camión:</strong>

            <?php
                $camion1->set_color("Azul");
            ?>

            <p>
                Color actual:
                <strong><?php echo $camion1->get_color(); ?></strong>
            </p>

        </div>

    </section>


    <!-- RESUMEN -->
    <section>

        <h2>Resumen</h2>

        <ul>
            <li>Los getters permiten consultar propiedades de un objeto.</li>
            <li>Los setters permiten modificar propiedades de un objeto.</li>
            <li>Generalmente se declaran como métodos públicos.</li>
            <li>Permiten trabajar con propiedades protected o private sin acceder directamente a ellas desde fuera de la clase.</li>
            <li>Las subclases también pueden utilizar los métodos públicos heredados.</li>
        </ul>

    </section>


    <footer>
        PHP desde cero - Programación Orientada a Objetos VI
    </footer>

</div>

</body>
</html>
