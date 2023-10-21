<?php
// Replace these variables with your own database credentials
$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

// Create a database connection
$mysqli = new mysqli($host, $username, $password, $database);

// Check for connection errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Query to select data from the database table
$query = "SELECT * FROM your_table_name";

// Execute the query
$result = $mysqli->query($query);

// Check for query execution errors
if (!$result) {
    die("Query failed: " . $mysqli->error);
}

// Check if there are any rows in the result
if ($result->num_rows > 0) {
    echo "<table border='1'>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
          </tr>";

    // Loop through the rows and display data
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found in the table.";
}

// Close the database connection
$mysqli->close();
?>
