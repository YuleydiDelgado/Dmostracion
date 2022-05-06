<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Registro de cliente</h2>
    <form action="registro.php" method="post">
        DUI:<input type="number" name="dui" required="true"> 
        Fecha de nacimiento:<input type="date" name="fecha" required="true"><br><br>
        Nombre:<input type="text" name="nombre" required="true">
        Apellido<input type="text" name="apellido" required="true"><br><br>
        Sexo:<select id="sexo" name="sexo">
            <option 
            value="Femenino">Femenino</option>
            <option value="masculino"> Masculino</option>
</select>
            <p>Tipo de empleo:</p> <input type="radio" id="trabajo" name="empleo" value="Informal">
  <label for="informal">Informal</label>
 <input type="radio" id="trabajo" name="empleo" value="privado">
  <label for="privado">Privado</label><br>
 <input type="radio" id="trabajo" name="empleo" value="publico">
  <label for="publico">Empleado Publico</label><br><br>

        Direccion:<input type="text" name="direccion" required="true" maxlength="40"><br><br>
        Municipio:<select id="mun" name="municipio">
            <option value="ss">San Salvador</option>
            <option value="la paz">Mejicanos</option>
            <option value="la paz">San Marcos</option>
            <option value="la paz">Apopa</option>
            <option value="zct">Zacatecoluca</option>
            <option value="slt">San Luis Talpa</option>
            <option value="sjt">San Juan Talpa</option>
            <option value="olct">Olocuilta</option></select>
            Departamento:<select id="dt" name="depto">
            <option value="ss">San Salvador</option>
            <option value="la paz">La Paz</option></select><br><br>

     <label for="email"> Correo:</label>
  <input type="email" id="email" name="email">
  <label for="pwd">Clave:</label> <input type="password" id="pwd" name="pwd"><br><br>

  <input type="submit" name="bt" value="Enviar"></br>




</form>
    
</body>
</html>
