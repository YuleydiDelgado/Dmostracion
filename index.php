<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Formulario</h1>
    <form action="procesador.php" method="post">
        Carnet:<input type="number" name="carnet" required= "true"><br>
        Nombre:<input type="text" name="nombre" required="true" maxlength="30"><br>
        Fecha de nacimiento: <input type="date" name="fecha" required><br>
        <input type="submit" name="btl" value="Enviar datos"></br>
        <input type="reset" name="btl" value="limpiar"></br>

</form>

</body>
</html>