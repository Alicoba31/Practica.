<?php
$servername = "localhost";
$username = "id22216307_kipa098";
$password = "KIPa1234.";
$dbname = "id22216307_todo_list";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
