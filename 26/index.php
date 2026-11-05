<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso Concesionario</title>
</head>
<body>
    <h1>Concesionario</h1>
    <hr>

    <?php 
        include("concesionario.php");

        // Hacer referencia a una propiedad estática
        Compra_vehiculo::$bono = 10000;

        $compra_Antonio = new Compra_vehiculo("compacto");
        $compra_Antonio -> climatizador();
        $compra_Antonio -> tapiceria_cuero("blanco");
        echo "<p>Precio Final Antonio: {$compra_Antonio -> precio_final()}</p>";

        $compra_Ana = new Compra_vehiculo("compacto");
        $compra_Ana -> climatizador();
        $compra_Ana -> tapiceria_cuero("rojo");
        echo "<p>Precio Final Ana: {$compra_Ana -> precio_final()}</p>";

    ?>
</body>
</html>