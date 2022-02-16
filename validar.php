<?php

$usuario=$_POST['Usuario'];
$contraseña=$_POST['Contraseña'];
session_start();
$_SESSION['Usuario']=$usuario;
$conexion=mysqli_connect("localhost","root","", "bdd_fundacion_terra");

$consulta="SELECT * FROM tbl_ms_usuario where Usuario='$usuario' and Contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){  
    header("location:home.php");  
    
}else{
    ?>
    <?php
    include("index.php");
    ?>    
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
