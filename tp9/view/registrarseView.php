<html>
<head></head>
<body>

Registro

<form action="./helper/guardarUsuario.php" method="POST" enctype="application/x-www-form-urlencoded">
     <input type="number" name="id_usuario" placeholder="Ingrese un número de usuario" required><br/>
     <input type="text" name="usuario" placeholder="Ingrese un usuario" required><br/>
     <input type="email" name="mail" placeholder="Ingrese un mail" required><br/>
     <input type="password" name="clave" placeholder="Ingrese una contraseña" required><br/>
     <input type="number" name="id" placeholder="Tipo de Usuario" required><br/>
     <input type="submit" value="Enviar">
</form>
</body>
</html>

