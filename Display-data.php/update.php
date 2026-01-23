<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "college";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id     = $_POST['id'];
$name   = $_POST['name'];
$course = $_POST['course'];
$batch  = $_POST['batch'];
$city   = $_POST['city'];
$year   = $_POST['year'];

$sql = "UPDATE students SET 
            name='$name',
            course='$course',
            batch='$batch',
            city='$city',
            year='$year'
        WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record Updated Successfully!";
    echo "<br><a href='index.php'>Back to Table</a>";
} else {
    echo "Error updating record: " . $conn->error;
}
