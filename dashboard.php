<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "contact";

$conn = new mysqli($servername, $username, $pass, $dbname);
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM my_contact";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Id</th><th>Name</th><th>Email</th><th>Contact</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row['contact'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No data found";
}

$conn->close();
?>