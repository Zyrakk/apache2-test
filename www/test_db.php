<?php
// Parámetros de conexión (usar los mismos que definimos en docker-compose)
$host = "db";            // Nombre del host (servicio) de la base de datos en Docker
$user = "root";          // Usuario (aquí usamos root para la prueba)
$password = "MiPassword123";  // Contraseña del root (según la establecimos en compose)
$database = "prueba";    // Nombre de base de datos para probar (según la variable MYSQL_DATABASE)

// Intentar conectar
$conn = mysqli_connect($host, $user, $password, $database);

// Verificar la conexión
if (!$conn) {
    die("Error de conexión (" . mysqli_connect_errno() . "): " . mysqli_connect_error());
}
echo "Conexión exitosa a MariaDB usando mysqli!";
mysqli_close($conn);
?>
