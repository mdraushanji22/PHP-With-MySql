<?php
include("./insert.html");

$host = "localhost";
$username = "root";
$password = "";
$database = "college";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
if (isset($_POST['name'])) {
    $name  = $_POST['name'];
    $course  = $_POST['course'];
    $batch  = $_POST['batch'];
    $city  = $_POST['city'];
    $year  = $_POST['year'];
}

// Insert Query
$sql = "INSERT INTO students (name, course, batch,city,year) VALUES ('$name', '$course', '$batch', '$city','$year')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
