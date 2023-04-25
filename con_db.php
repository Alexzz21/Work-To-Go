<?php
$servername = "localhost"; // nombre del servidor
$username = "root"; // nombre de usuario de la base de datos
$password = ""; // contraseña de la base de datos
$dbname = "cuentasusers"; // nombre de la base de datos

// Crea la conexión
$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Verifica si la conexión fue exitosa
if (!$conexion) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}else{
    echo "Todo bien, <3";
}
?>
