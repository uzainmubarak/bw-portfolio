<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "info";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT title, description, link FROM project_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($rows = $result->fetch_assoc()) {
        echo "<tr><td>" . $rows["title"] . "</td><td>" . $rows["description"] . "</td><td>" . $rows["link"] . "</td></tr>";
    }
} else {
    echo "<tr><td colspan='3'>No data available</td></tr>";
}

$conn->close();
?>