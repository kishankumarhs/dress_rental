<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .sidebar {
            height: 100%;
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(to bottom, #33ccff 0%, #ffffff 100%);
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 25px;
            font-family: "Kanit", sans-serif;
             font-weight: 700;
            font-style: normal;
            color: black;
            display: block;
            text-align: left;
            position: relative;
            top: 5%;

        }

        .sidebar a:hover {
            background-color: whitesmoke;
        }

        .content {
            margin-left: 200px;
            padding: 20px;
        }

        .header {
            background-color: #0055cc;
            color: #fff;
            padding: 0px;
            text-align: center;
            font-size: 45px;
            font-family: "Kanit", sans-serif;
             font-weight: 600;
            font-style: normal;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: blue;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color:#a9d2ff ;
        }
        tr:nth-child(odd){
            background-color: white;
        }

        .navbar {
            background-color: #66b3ff;
            font-size: 30px;
            color: #fff;
            display: block;
            text-decoration: none;
            margin-bottom: 20px;
        }

        .navbar a {
            color: black;
            text-decoration: none;
            display: inline-block;
            padding: 10px 15px;
            text-align: center;
            font-size: 22px;
            font-family: "Kanit", sans-serif;
             font-weight: 700;
            font-style: normal;
        }

        .navbar a:hover {
            background-color:whitesmoke;
        }
        .staff-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .staff-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .staff-form input[type="text"],
        .staff-form input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .staff-form input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .staff-form input[type="submit"]:hover {
            background-color: #45a049;
        }
        .medicine-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .medicine-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .medicine-form input[type="text"],
        .medicine-form input[type="number"],
        .medicine-form input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .medicine-form input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .medicine-form input[type="submit"]:hover {
            background-color: #45a049;
        }
        .sidebar img{
            width:120px;
            position: relative;
            left:9%;
        }
    </style>
</head>
<body>
<div class="sidebar">
    <img src="./pharmacy.png" alt="logo">
    <a href="?page=men">Men Collection</a>
    <a href="?page=women">Women Collection</a>
</div>



    <div class="content">
        <div class="header">
            Dashboard
        </div>
        <?php
// Check which page to display
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'men':
            echo "<div class='navbar'>";
            echo "<a href='?page=men&subpage=available'>Available</a>";
            echo "<a href='?page=men&subpage=add'>Add</a>";
            echo "<a href='?page=men&subpage=update'>Update</a>";
            echo "<a href='?page=men&subpage=remove'>Remove</a>";
            echo "</div>";

            // Include men's collection content here based on subpage
            if (isset($_GET['subpage'])) {
                $subpage = $_GET['subpage'];
                switch ($subpage) {
                    case 'available':
                        echo "<center><h2>Available Dresses</h2></center>";
                        // Fetch data from database and display in table format
                        $conn = new mysqli('localhost', 'system', '', 'athiyastore');
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM mdresses";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            echo "<table>";
                            echo "<tr><th>Dress name</th><th>Dress Price</th><th>Stock</th><th>Advance</th></tr>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['dress_name'] . "</td>";
                                echo "<td>" . $row['dress_price'] . "</td>";
                                echo "<td>" . $row['Stock'] . "</td>";
                                echo "<td>" . $row['advance'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "No available dresses";
                        }

                        $conn->close();
                        break;
                    case 'add':
                        // Add Dress Form
                        echo "<center><h2>Add Dress</h2></center>";
                        echo "<div class='medicine-form'>";
                        echo "<form method='post'>";
                        echo "<label for='dress_name'>Dress Name:</label>";
                        echo "<input type='text' id='dress_name' name='dress_name' required><br>";

                        echo "<label for='dress_price'>Dress Price:</label>";
                        echo "<input type='text' id='dress_price' name='dress_price' required><br>";

                        echo "<label for='dress_stock'>Stock:</label>";
                        echo "<input type='text' id='Stock' name='Stock' required><br>";

                        echo "<label for='dress_advance'>Advance:</label>";
                        echo "<input type='text' id='advance' name='advance' required><br>";

                        echo "<input type='submit' value='Add Dress' name='submit'>";
                        echo "</form>";
                        echo "</div>";

                        // Form submission and insertion into database
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                            $servername = "localhost";
                            $username = "system";
                            $password = ""; // Replace with your actual password
                            $dbname = "athiyastore";

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $dress_name = $_POST['dress_name'];
                            $dress_price = $_POST['dress_price'];
                            $dress_stock = $_POST['Stock'];
                            $dress_advance = $_POST['advance'];

                            $sql = "INSERT INTO mdresses (dress_name, dress_price, Stock,advance)
                                    VALUES ('$dress_name', '$dress_price', '$dress_stock', '$dress_advance')";

                            if ($conn->query($sql) === TRUE) {
                                echo "<script>alert('Dress added successfully!');</script>";
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }

                            $conn->close();
                        }
                        break;
                    case 'update':
                        // Include update dress form here
                        break;
                    case 'remove':
                        // Include remove dress form here
                        break;
                    default:
                        echo "<h2></h2>";
                        break;
                }
            } else {
                echo "<h2></h2>";
            }
            break;
        case 'women':
            // Include women's collection content here
            break;
        default:
            echo "<h2></h2>";
            break;
    }
} else {
    echo "<h2></h2>";
}
?>


    </div>
</body>
</html>

