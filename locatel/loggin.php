<?php
    session_start();
?>
   
   <?php

include 'conexion2.php';

$conexion2 = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion2->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$usuario = $_POST['correo'];
$contra = $_POST['contra'];
$sql = "SELECT * FROM registrar WHERE correo = '$usuario'";


$result = $conexion2->query($sql);


if ($result->num_rows > 0) {     }
	
 
  $row = $result->fetch_array(MYSQLI_ASSOC);
 // if (password_verify($password, $row['password'])) { 
if ($contra==$row['contra']) { 

 
    $_SESSION['loggedin'] = true;
    $_SESSION['usuario'] = $usuario;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "Bienvenido! " . $_SESSION['usuario'];
    echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 
    header('Location: inicio.php');//redirecciona a la pagina del usuario

 } else { 
    $mensaje = "Nombre de usuario o contraseñas incorrectos, verifique por favor";
    echo "<script>";
    echo "alert('$mensaje');";
    echo "window.location = 'inicioSesion.html';";
    echo "</script>";
 }
 mysqli_close($conexion2); 
 ?>