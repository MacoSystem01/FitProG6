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
$genero = $_POST['genero'];
$estatura = $_POST['estatura'];
$peso = $_POST['peso'];
$edad = $_POST['edad'];
$imc = $_POST['imc'];
$patologia = $_POST['grupoPatologias'];
$enfermedad = $_POST['enfermedades'];
// Agrega los demás campos del formulario

// Preparar y ejecutar la consulta SQL para insertar los datos en la tabla perfil_salud
$sql = "INSERT INTO perfil_salud VALUES ('$name', '$edad', '$genero', '$estatura', '$peso', '$imc', '$patologia', '$enfermedad')"; // Agrega los demás campos del formulario

if ($conn->query($sql) === TRUE) {
    //echo "Datos insertados correctamente";
	$mensaje = "¡El perfil de salud se ha creado exitosamente!";

	// Redirigir a otra página HTML con el mensaje como parámetro en la URL
	header("Location: index.html?mensaje=" . urlencode($mensaje));	
	exit(); // Asegura que el script se detenga después de la redirección
} else {	
    //echo "Error al insertar datos: " . $conn->error;
	
	// Generar código JavaScript para mostrar el alert
	$script = "<script>alert('Error al insertar datos: " . $conn->error . "');</script>";
	echo $script;
}

$conn->close();
?>
