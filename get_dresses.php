<?php
require 'connection.php';

$servername = "localhost"; // Change this to your MySQL server hostname
$username = "system"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "athiyastore"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch up to 20 available dresses from the database
$sql = "SELECT * FROM dresses WHERE dress_availability = 'yes' LIMIT 20";
$result = mysqli_query($conn, $sql);

$dresses = array();

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $dress = array(
            'dress_name' => $row['dress_name'],
            'dress_price' => $row['dress_price'],
            'dress_img' => $row['dress_img'],
            'stock' => $row['Stock'] // Assuming 'Stock' is the correct column name for stock in your database
        );

        $dresses[] = $dress;
    }
} else {
    echo "No dresses available in the database.";
}

// Close connection
mysqli_close($conn);

// Return dresses data as JSON
if (!empty($dresses)) {
    header('Content-Type: application/json');
    echo json_encode($dresses);
} else {
    echo 'No dresses available.';
}
?>
