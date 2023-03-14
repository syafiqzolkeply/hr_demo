<?php
$servername = "sp2023.mysql.database.azure.com";
$username = "admin_sp2023";
$password = "S0ftW@r3Pr0j3cT23";
$dbname = "human_resource";
$port = 3306;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>