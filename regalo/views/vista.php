<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ignacio Basso">
    <title>Incentivo Navideño</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body {
            background: url('./img/navidad.jpg') no-repeat fixed;
            background-size: cover;
            display: flex;
            justify-content: left;
            flex-direction: column;
        }

        h1 {
            display: flex;
            color: black;
            text-shadow: 5px 5px 8px grey;
            justify-content: left;
            padding: 30px;
            font-size: 2.5em;
            margin-left:100px;
        }

        form {
            background-image: url('./img/fondoFormularioNavidad.jfif');
            background-size: cover;
            width: 400px;
            background-color: #756c6c;
            color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 5px 4px 12px rgba(0, 0, 0, 0.9), 2px 2px 6px rgba(0, 0, 0, 0.15);
            margin: 10px;
            margin-left:100px;

        }

        legend {
            text-align: center;
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

        label {
            display: inline-block;
            width: 100%;
            margin: 2px;
        }

        input[type="text"],
        input[type="email"],
        select {
            width: 90%;
            padding: 5px;
            margin: 10px 15px;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 150px;
            padding: 10px;
            background-color: goldenrod;
            font-weight: bolder;
            box-shadow: 2px 5px 5px white;
            cursor: pointer;
            display: block;
            margin: 20px auto;
        }

        input[type="submit"]:hover {
            transform: scale(1.1);
        }

        @media screen and (max-width: 750px) {
            body {
                background-image: url('./img/fondoresponsive.jfif');
            }

            form {
                background: url('./img/navidad.jpg');
                background-size: cover;
                display: block;
                margin: 20px auto;
                color: black;
                font-weight: bolder;
                width: 95%;
            }

            select {
                font-weight: bolder;
            }

            input[type="submit"] {
                box-shadow: 2px 15px 15px black;
            }

            h1 {
                background-color: rgba(0, 0, 0, 0.7);
                text-align: center;
                font-size: 2em;
                justify-content: center;
                color: white;
                margin:10px auto;
            }
        }
    </style>
</head>
<body>
    <h1>¿Quieres un regalo?</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <fieldset>
            <legend> INCENTIVO NAVIDEÑO </legend>
            <div class="formato">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre">
                <label for="apellidos">Apellidos:</label>
                <input type="text" name="apellidos" id="apellidos">
                <input type="submit" name="enviar" value="VER REGALO">
        </fieldset>
    </form>
</body>
</html>
<?php
require_once './models/Empleado_nuevo.php';
require_once './models/Empleado_normal.php';
require_once './models/Empleado_honor.php';


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $enviar = isset($_GET['enviar']) ? htmlspecialchars(trim($_GET['enviar'])) : "";
    $apellidos = isset($_GET['apellidos']) ? htmlspecialchars(trim($_GET['apellidos'])) : "";
    $nombre = isset($_GET['nombre']) ? htmlspecialchars(trim($_GET['nombre'])) : ""; 

    if (!empty($enviar)) {

        $empleado1 =new Empleado_nuevo("Rocío", "Pérez García", 1);
        $empleado2 =new Empleado_nuevo("Brayan", "Cuadrado Espejo", 3);
        $empleado3 =new Empleado_normal("Marco", "Bross", 7);
        $empleado4 =new Empleado_normal("Ignacio", "Basso Pérez", 8);
        $empleado5 =new Empleado_honor("Mayeli", "Martínez Orosco", 11);

        $empleados = [$empleado1, $empleado2, $empleado3, $empleado4, $empleado5];
        $j = 0;
        for ($i = 0; $i < sizeof($empleados); $i++) {
            $empleado = $empleados[$i];
            if (strcmp($empleado->getNombre(),$nombre) == 0 && strcmp($empleado->getApellido(),$apellidos) == 0) {
                    echo "<script>alert('¡Feliz Navidad $nombre $apellidos! Al ser un empleado con ". $empleado->getAntiguedad()."años de antiguedad, te corresponde de regalo un " . $empleado->getRegalo() . "¡¡¡FELICIDADES!!!');</script>";
                    $j++; 
            }else if($j == 0 && $i+1 == sizeof($empleados)){
                echo "<script>alert('No tenemos registros de ningún empleado con ese nombre y apellidos.')</script>";
            } 
        }
        if($nombre == '' || $apellidos == '' ){
            echo "<script>alert('Debes completar todos los campos')</script>";
        }  

    }
}

?>