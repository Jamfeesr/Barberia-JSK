
<?php
$host = "localhost";
$user = "root";
$pass = "1234";
$db = "barberia";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
