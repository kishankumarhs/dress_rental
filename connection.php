<?php
// Database credentials
$servername = "localhost"; // Change this to your MySQL server hostname
$username = "system"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "athiyastore"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Connection successful, you can optionally echo a success message here
}

// Now, you can use the $conn variable to perform database operations

// For example, if you want to execute an SQL query, you can do it like this:
// $sql = "SELECT * FROM your_table";
// $result = $conn->query($sql);
// Then, you can fetch data from $result and do further processing

// Don't forget to close the connection when you're done with database operations
// $conn->close();
?>
