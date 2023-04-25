<?php
  // Obtener los valores del formulario
  $nombre = $_POST['RNombre'];
  $cedula = $_POST['RCedula'];
  $telefono = $_POST['RTelefono'];
  $email = $_POST['REmail'];
  $clave = $_POST['RContra'];
  
  // Conectar a la base de datos
  include("con_db.php");
  
  // Preparar la consulta SQL para insertar los datos en la tabla "usuarios"
  $consulta = "INSERT INTO usuarios (nombre, cedula, telefono, email, clave) VALUES ('$nombre', '$cedula', '$telefono', '$email', '$clave')";
  
  // Ejecutar la consulta SQL
  mysqli_query($conexion, $consulta);
  
  // Cerrar la conexión a la base de datos
  mysqli_close($conexion);

  header("Location: index.php");
exit;
?>
