<?php
// Database connection parameters
$servername = "localhost";
$username = "system"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "athiyastore";   // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$mobileNumber = $_POST['mobileNumber'];
$gmail = $_POST['gmail'];
$password = $_POST['password'];
$username = $_POST['username'];

// Check if username, mobile number, and Gmail are unique
$sql = "SELECT * FROM users WHERE username='$username' OR mobile_number='$mobileNumber' OR email='$gmail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Username, mobile number, or Gmail already exists
    echo "Username, mobile number, or Gmail already exists. Please use different data or <a href='signup.php'>create a new account</a>.";
} else {
    // Insert data into the database
    $sql = "INSERT INTO users (first_name, last_name, mobile_number, email, password, username)
    VALUES ('$firstName', '$lastName', '$mobileNumber', '$gmail', '$password', '$username')";

    if ($conn->query($sql) === TRUE) {
        echo"Account Created Successfully" ;
        // Redirect to a success page or login page upon successful sign up
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
