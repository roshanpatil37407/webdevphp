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

// Function to insert data into the database
function insertData($mysqli, $name, $email) {
    $query = "INSERT INTO your_table_name (name, email) VALUES (?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("ss", $name, $email);
    
    if ($stmt->execute()) {
        return "Data inserted successfully.";
    } else {
        return "Error: " . $mysqli->error;
    }
}

// Function to update data in the database
function updateData($mysqli, $id, $newName, $newEmail) {
    $query = "UPDATE your_table_name SET name = ?, email = ? WHERE id = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("ssi", $newName, $newEmail, $id);
    
    if ($stmt->execute()) {
        return "Data updated successfully.";
    } else {
        return "Error: " . $mysqli->error;
    }
}

// Function to delete data from the database
function deleteData($mysqli, $id) {
    $query = "DELETE FROM your_table_name WHERE id = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        return "Data deleted successfully.";
    } else {
        return "Error: " . $mysqli->error;
    }
}

// Example usage
echo insertData($mysqli, "John Doe", "john@example.com") . "<br>";
echo updateData($mysqli, 1, "Jane Smith", "jane@example.com") . "<br>";
echo deleteData($mysqli, 2) . "<br>";

// Close the database connection
$mysqli->close();
?>
