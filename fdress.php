<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Dresses</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: cornsilk;
        }
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
       

        .container {
            width: 80%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding-top: 100px;
        }

        .dress-card {
            width: calc(25% - 40px); /* Adjust width to fit 3 cards per row */
            margin: 20px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .dress-details {
            text-align: center;
        }

        .in-stock {
            color: green;
        }
        
        .out-of-stock {
            color: red;
        }

        img {
            width: 100%;
            height: auto;
        }

        h1 {
            text-align: center;
        }

        .marquee {
            width: 100%;
            overflow: hidden;
        }

        .marquee h2 {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 15s linear infinite;
        }
        .home-icon {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-image: url('assets/homeicon.png'); /* Add your home icon image URL here */
            background-size: contain;
            background-repeat: no-repeat;
            cursor: pointer;
            margin-bottom: 20px; /* Add margin to separate from other content */
            position: absolute;
            top:5%;
            left:5%;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
    </style>
</head>
<body>

<div class="container">
<div class="centered-text">
    <h1>Wardrobe Wonders</h1>
</div>


<?php
// Database connection
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

// Fetch dress data
$sql = "SELECT * FROM dresses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output dress information in card format
    while ($row = $result->fetch_assoc()) {
        echo '<div class="dress-card">';
        echo '<img src="' . $row["dress_img"] . '" alt="' . $row["dress_name"] . '">';
        echo '<div class="dress-details">';
        echo '<h2>' . $row["dress_name"] . '</h2>';
        echo '<p>Price: Rs. ' . $row["dress_price"] . ' /day</p>';
        echo '<p>Advance: Rs. ' . $row["advance"] . '</p>'; // Display advance
        $stockStatus = $row["Stock"] > 0 ? '<span class="in-stock">In Stock</span>' : '<span class="out-of-stock">Out of Stock</span>';
        echo '<p>' . $stockStatus . '</p>';
        if ($row["Stock"] > 0) {
            echo '<form method="post" action="generate_bill.php">';
            echo '<input type="hidden" name="dress_name" value="' . $row["dress_name"] . '">';
            echo '<input type="hidden" name="dress_price" value="' . $row["dress_price"] . '">';
            echo '<input type="hidden" name="advance" value="' . $row["advance"] . '">'; // Include advance in form data
            echo '<label for="days">Number of days:</label>';
            echo '<input type="number" id="days" name="days" min="1" max="5" required>';
            echo '<input type="submit" value="Rent">';
            echo '</form>';
        }
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No dresses available.";
}
$conn->close();
?>

</div>
<div class="home-icon" onclick="goToHomePage()"></div>

  
     <script>
        function goToHomePage() {
            window.location.href = 'index.php'; // Replace 'index.php' with the URL of your home page
        }
    </script>
</body>
</html>
