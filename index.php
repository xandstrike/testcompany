<?php
// Configuration
$db_host = 'g8mh6ge01lu2z3n1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$db_username = 'tlautbvaqck1i816';
$db_password = 'pxu7uwnjq5682i53';
$db_name = 'zmawt5kvnrrr33ip';

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve list of vehicles
$sql = "SELECT * FROM vehicles";
$result = $conn->query($sql);

// Check if query was successful
if (!$result) {
    die("Query failed: " . $conn->error);
}

// Create HTML table to display list of vehicles
echo "<table border='1'>";
echo "<tr><th>Make</th><th>Model</th><th>Year</th><th>Color</th></tr>";

// Loop through each row of the result set
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['make'] . "</td>";
    echo "<td>" . $row['model'] . "</td>";
    echo "<td>" . $row['year'] . "</td>";
    echo "<td>" . $row['color'] . "</td>";
    echo "</tr>";
}

echo "</table>";

// Close connection
$conn->close();
?>
