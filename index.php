<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login1.css">
    <link rel="stylesheet" href="css/cabecera1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
   <form action="validar.php" method="post">
   <h1 class="animate__animated animate__backInLeft">Bienvenido !!!</h1>
   <br>
   <img src="IMG/logo-fundacion.png" >
</br>
   <br>
   <p>Usuario <input type="text" placeholder="ingrese su Usuario" name="Usuario"></p>
</br>
   <p>Contraseña <input type="password" placeholder="ingrese su Contraseña" name="Contraseña"></p>
   <input type="submit" value="Ingresar">
   <a href = "home.php">  HOME </a>
</form> 

</body>
</html>