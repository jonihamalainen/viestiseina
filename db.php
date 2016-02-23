<?php
$servername = "paja.esedu.fi";
$username = "joni.hamalainen";
$password = "Qwerty123!";
$database = "joni.hamalainen";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
