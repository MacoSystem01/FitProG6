<?php
// Conectar a la base de datos
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "fitprog6";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$name = $_POST['name'];
$edad = $_POST['edad'];
// Agrega los demás campos del formulario

// Preparar y ejecutar la consulta SQL para insertar los datos en la tabla perfil_salud
$sql = "INSERT INTO perfil_salud (name, edad) VALUES ('$name', '$edad')"; // Agrega los demás campos del formulario

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

$conn->close();
?>
