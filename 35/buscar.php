<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="contenedor">
        <h1>Buscar</h1>
        <hr>
        <form class="formulario-articulo" action="pagina_resultado.php" method="POST">
            <label for="buscar">
                <input type="text" name="buscar" id="buscar">
            </label>
            <input type="submit" name="enviar" value="Buscar">
        </form>

    </div>
</body>

</html>