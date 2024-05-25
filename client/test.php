<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection file
include_once '../shared/connection.php';

// Check if the connection is established
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to the database successfully!<br>";

    // Check if the 'client' table exists
    $result = $conn->query("SHOW TABLES LIKE 'client'");
    if ($result->num_rows == 1) {
        echo "Table 'client' exists.";
    } else {
        echo "Table 'client' does not exist.";
    }
}
?>
