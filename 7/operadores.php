<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
    <style>
        h1{
            text-align: center;
        }
        table{
            background-color: #FFCC;
            padding: 5px;
            border: #666 5px solid;
        }
        .no_validado{
            font-size: 18px;
            color: #F00;
            font-weight: bold;
        }
        .validado{
            font-style: 18px;
            color: #0C3;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Usando operadores de comparación</h1>
    <a href="index.php">Volver al Inicio</a>

    <form action="" method="POST" name="datos_usuario" id="datos_usuario">
        <table width="15%" align="CENTER">
            <tr>
                <td>Nombre:</td>
                <td>
                    <label for="nombre_usuario"></label>
                    <input type="text" name="nombre_usuario" id="nombre_usuario">
                </td>
            </tr>
            <tr>
                 <td>Edad:</td>
                <td>
                    <label for="edad_usuario"></label>
                    <input type="text" name="edad_usuario" id="edad_usuario">
                </td>
            </tr>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2" align="CENTER">
                    <input type="submit" name="enviando" id="enviando" value="Enviar">
                </td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST["enviando"])){
            $usuario = $_POST["nombre_usuario"];
            $edad = $_POST["edad_usuario"];

            if($usuario == "Mario" && $edad >= 18){
                echo "<p class='validado' style='text-align: center';>Puedes entrar</p>";
            }else{
                echo "<p class='no_validado' style='text-align: center';>No puedes entrar</p>";
            }
        }
    ?>
</body>
</html>