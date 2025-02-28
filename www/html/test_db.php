<?php
// Parámetros de conexión (usar los mismos que definimos en docker-compose)
$host = "db";            // Nombre del host (servicio) de la base de datos en Docker
$user = "root";          // Usuario
$password = "root";  // Contraseña del root
$database = "prueba";    // Nombre de base de datos para probar

// Intentar conectar
$conn = mysqli_connect($host, $user, $password, $database);

// Verificar la conexión
if (!$conn) {
    die("Error de conexión (" . mysqli_connect_errno() . "): " . mysqli_connect_error());
}
echo "<h1>Conexión exitosa a MariaDB usando mysqli!</h1>";
mysqli_close($conn);
?>
