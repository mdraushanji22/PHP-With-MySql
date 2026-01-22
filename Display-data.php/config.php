<?php
// Database Connection
$host = "localhost";
$username = "root";
$password = "";
$database = "college";

$conn = new mysqli($host, $username, $password, $database);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL Query
$sql = "SELECT id, name, course, batch, city, year FROM students";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Display Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background: lightgray;
        }
    </style>
</head>

<body>

    <h2>Students Table</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course</th>

            <th>Batch</th>
            <th>City</th>
            <th>Year</th>

        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['course'] . "</td>";
                echo "<td>" . $row['batch'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";



                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No Data Found</td></tr>";
        }
        ?>

    </table>

</body>

</html>