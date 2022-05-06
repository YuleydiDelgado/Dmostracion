<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Datos ingresados</h1>
    <?php 
    if (isset($_REQUEST["carnet"]))
    {
        $car=$_REQUEST["carnet"];
        $nombre=$_REQUEST["nombre"];
        $fecha=$_REQUEST["fecha"];
        echo"<br>Carnet:".$car;
        echo"<br>fecha nacimiento:".$fecha;

    }
    ?>
    
</body>
</html>