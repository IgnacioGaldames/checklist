<?php
$servername = "github";
$username = "root";
$password = "root";
$dbname = "sql_check";

$dbcampo = "*";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("falló la conexión " . $conn->connect_error);
}
header('Content-Type: text/html; charset=utf-8');

?>
