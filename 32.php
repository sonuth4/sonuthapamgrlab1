<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch all records from users table
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Check if query is successful
if (!$result) {
    die("Query failed: " . $conn->error);
}

// Display data in table format
echo "<h2>Users Table</h2>";
echo "<table border='1' cellspacing='0' cellpadding='10'>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Rank</th>
        <th>Status</th>
        <th>Image</th>
        <th>Created By</th>
        <th>Updated By</th>
        <th>Created At</th>
        <th>Updated At</th>
      </tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['rank']}</td>
                <td>{$row['status']}</td>
                <td>{$row['image']}</td>
                <td>{$row['created_by']}</td>
                <td>{$row['updated_by']}</td>
                <td>{$row['created_at']}</td>
                <td>{$row['updated_at']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='9'>No records found</td></tr>";
}

echo "</table>";

// Close the connection
$conn->close();
?>
