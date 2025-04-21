<?php
// Conexión
$conn = new mysqli("localhost", "root", "", "mantenimientos");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$edificio = $_POST['edificio'];
$aula = $_POST['aula'];
$descripcion = $_POST['descripcion'];

// Insertar en la base de datos
$sql = "INSERT INTO solicitudes (nombre, correo, edificio, aula, descripcion)
        VALUES ('$nombre', '$correo', '$edificio', '$aula', '$descripcion')";

if ($conn->query($sql) === TRUE) {
    echo "Solicitud enviada correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
