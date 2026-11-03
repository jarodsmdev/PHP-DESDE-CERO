<style>
        h1{
            text-align: center;
        }
        table{
            background-color: #FFC;
            padding: 5px;
            border: #666 5px solid;
        }
        .no_validado{
            font-size: 18px;
            color: #F00;
            font-weight: bold;
        }
        .validado{
            font-size: 18px;
            color: #0C3;
            font-weight: bold;
        }
    </style>
<?php
    if(isset($_POST["enviando"])) {
        $nombre = $_POST["nombre_usuario"];
        $contra = $_POST["contra_usuario"];

        switch (true) {
            case $nombre == "Juan" && $contra=="JJJJ":
                echo "Usuario Autorizado. Hola Juan";
                break;
            case $nombre == "María" && $contra=="MMMM":
                echo "Usuario Autorizado. Hola María";
                break;
            case $nombre == "Pedro" && $contra=="PPPP":
                echo "Usuario Autorizado. Hola Pedro";
                break;
            default:
                echo "Usuario no autorizado.";
        }
    }
?>