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
<?php
session_start();
if( isset($_SESSION['Usuario']))

{
    ?>
    <a href = "LOGOUT.PHP"> CERRAR SESION </a>
   <h1>BIENVENIDOS <?php echo $_SESSION['Usuario'];?> </h1>
    <?php
}

else{
    echo "<h1> NO TIENE PERMISO </h1>";
}
?> 
</body>
</html>






    
