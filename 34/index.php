<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Registros</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Eiminar Registros</h1>
    <hr>

    <form name="form1" method="POST" action="eliminar_registro.php">
        <table border="0" align="CENTER">
            <tr>
                <td>Código Artículo</td>
                <td>
                    <label for="c_art"></label>
                    <input type="text" name="c_art" id="c_art">
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td align="CENTER">
                    <input type="submit" name="enviar" id="enviar" value="Eliminar">
                </td>
                <td align="CENTER">
                    <input type="reset" name="Borrar" id="Borrar" value="Limpiar">
                </td>
            </tr>
        </table>

    </form>

</body>

</html>