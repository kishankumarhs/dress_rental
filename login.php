<?php
session_start(); // Start the session

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

// Initialize variables
$username = $password = "";
$usernameErr = $passwordErr = "";
$loginErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }

    // If both username and password are provided
    if (!empty($username) && !empty($password)) {
        // Check if the username and password match in the database
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // Set session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            
            // Redirect to home page
            header("Location: index.php");
            exit();
        } else {
            $loginErr = "Invalid username or password. Please try again or <a href='signup.php'>create a new account</a>.";
            // Reset username and password fields
            $username = $password = "";
        }
    }
}

// Close database connection
$conn->close();

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Background image */
/* Background image */
body {
    background-image: url('assets/u.jpg'); /* Replace 'your_image_url_here.jpg' with the URL of your background image */
    background-size: cover; /* Adjust background size as needed */
    background-repeat: no-repeat; /* Prevent the background image from repeating */
    background-position: center; /* Center the background image */
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    height: 100vh; /* Set the height to 100% of the viewport height */
}

/* Container */
.container {
    width: 300px;
    margin: 100px auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background */
    border-radius: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Shadow effect */
}


/* Container */
/*.container {
    width: 300px;
    margin: 100px auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background */
  /*  border-radius: 20px;*/
  /*  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Shadow effect */
/*}


        /* Container */
        .container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background */
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Shadow effect */
        }

        .input-group {
            margin-bottom: 10px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: px;
            cursor: pointer;
            width: 100%;
        }

        .error {
            color: red;
        }

        .back-button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-bottom: 20px;
            cursor: pointer;
            border-radius: 8px;
        }

        .back-button:hover {
            background-color: #45a049;
        }
        .footer {
            position: fixed;
            bottom: 10px;
            left: 10px;
            font-size: 15px;
            color:black;
            font-weight: 500;

        }
        .head{
            position: relative;
            bottom:20%;
        }
    </style>
</head>
<body>
    <header><center><h1>Wardrobe Wonders</h1></center></header>
    <div class="container">
        <h2>Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="<?php echo $username; ?>" required>
                <span class="error"><?php echo $usernameErr; ?></span>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" value="<?php echo $password; ?>" required>
                <span class="error"><?php echo $passwordErr; ?></span>
            </div>
            
            <button type="submit" class="btn">Login</button>
        </form>
        <p class="error"><?php echo $loginErr; ?></p>
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
    </div>
    <div class="footer">
        <p><b>Developed by: Athiya Tabassum and  Nandini SS<b></p>
        <p>Guided by: H S Virupakshaiah</p>
    </div>
    <script>
        // Your existing JavaScript code
    </script>
</body>
</html>
