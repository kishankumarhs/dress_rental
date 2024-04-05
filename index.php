<?php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        /* CSS for Navbar */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            background-image: url('assets/backgroundimage.jpg'); /* Add your background image URL here */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .navbar {
            overflow: hidden;
            background-color: black;
            position: absolute;
            top: 14%;
            width: 100%; /* Ensure the navbar spans the entire width */
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Login button */
        .login-btn {
            float: right;
            margin-right: 20px; /* Adjust margin for better positioning */
            margin-top: 10px;
        }

        /* Centered text */
        .centered-text {
            position: absolute;
            top: 7%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: black;
            font-size: 25px;
            font-family: "Allerta Stencil", sans-serif;
            /* Adjust font size and other properties as needed */
        }

        .logo {
            position: absolute;
            top: -2%;
            left: 20px; /* Adjust left position for better alignment */
        }

        .button-24 {
            background: #FF4742;
            border: 1px solid #FF4742;
            border-radius: 6px;
            box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: nunito, roboto, proxima-nova, "proxima nova", sans-serif;
            font-size: 16px;
            font-weight: 800;
            line-height: 16px;
            min-height: 40px;
            outline: 0;
            padding: 12px 14px;
            text-align: center;
            text-rendering: geometricprecision;
            text-transform: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: middle;
            position: absolute;
            top: 3%;
            right: 20px; /* Adjust right position for better alignment */
        }

        .button-24:hover,
        .button-24:active {
            background-color: initial;
            background-position: 0 0;
            color: #FF4742;
        }

        .button-24:active {
            opacity: .5;
        }

        /* Terms and Conditions Container */
        .terms-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            border-radius: 8px;
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
        }

        .terms-container h3 {
            color: #333;
        }

        .terms-container p {
            color: #666;
        }
        
        .hello {
            position: absolute;
            top: 3%;
            right: 20px;
            color: white;
            font-weight: bold;
        }

        .logout-btn {
            color: white;
            background-color: red;
            padding: 8px 12px;
            border-radius: 4px;
            text-decoration: none;
            margin-left: 10px;
        }

        .logout-btn:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
<div class="navbar">
    <a href="about.php">About Us</a>
    <a href="fdress.php">Women Collection</a>
    <a href="mdress.php">Men Collection</a>
    <a href="contact.php">Contact Us</a>
    <a href="terms.php">Terms and Condition</a> <!-- Corrected text -->
</div>

<?php
// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // If logged in, retrieve the username from the session
    $username = $_SESSION['username'];
    // Display a greeting message with the username and a logout button
    echo "<div class='hello'>Hello, $username <a class='logout-btn' href='login.php'>Logout</a></div>";
} else {
    // If not logged in, display a login link
    echo "<a href='login.php' class='login-btn'>Login</a>";
}
?>

<div class="logo">
    <!-- Your logo -->
    <img src="assets/logo.png" width="100" height="100">

</div>

<div class="centered-text">
    <h1>Wardrobe Wonders</h1>
</div>

<!-- Your other content -->
</body>
</html>
