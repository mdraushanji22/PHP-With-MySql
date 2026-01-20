<?php
$host = "localhost";
$username = "root";
$password = null;
$database = "college";

$conn = new mysqli($host, $username, $password, $database);

// Correct error check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connection successful";
echo "<br>";
$result = $conn->query("show tables")->fetch_all();
print_r($result);
