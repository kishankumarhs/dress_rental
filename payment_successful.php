<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #4CAF50;
        }
        p {
            margin: 10px 0;
        }
        strong {
            font-weight: bold;
        }
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .back-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Database connection
        $servername = "localhost";
        $username = "system";
        $password = "";
        $dbname = "athiyastore";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve form data
        $dress_name = $_POST['dress_name'];
        $dress_price = $_POST['dress_price'];
        $rent_days = $_POST['days'];
        $payment_option = $_POST['payment-option'];

        // Initialize advance amount
        $advance_amt = 0;

        // Fetch advance amount from the database
        $advance_sql = "SELECT advance FROM dresses WHERE dress_name = '$dress_name'";
        $advance_result = $conn->query($advance_sql);

        if ($advance_result === false) {
            // Error handling for query execution
            echo "Error fetching advance amount: " . $conn->error;
        } elseif ($advance_result->num_rows > 0) {
            // Fetch advance amount if result is not empty
            $row = $advance_result->fetch_assoc();
            $advance_amt = $row['advance'];
        } else {
            // No rows found
            echo "No advance amount found for dress: $dress_name";
        }

        // Calculate total price including advance amount
        $total_price = ($dress_price * $rent_days) + $advance_amt;

        // Insert order details into database
        $sql = "INSERT INTO orders (dress_name, dress_price, rent_days, payment_method, purchase_date) 
                VALUES ('$dress_name', '$dress_price', '$rent_days', '$payment_option', NOW())";

        if ($conn->query($sql) === TRUE) {
            // Update stock
            $update_sql = "UPDATE dresses SET Stock = Stock - 1 WHERE dress_name = '$dress_name'";
            if ($conn->query($update_sql) === TRUE) {
                echo "<h2>Payment Successful</h2>";
                echo "<p>Order Details:</p>";
                echo "<p><strong>Dress Name:</strong> $dress_name</p>";
                echo "<p><strong>Total Price:</strong> Rs. $total_price</p>";
                echo "<p><strong>Rent Days:</strong> $rent_days</p>";
                echo "<p><strong>Payment Method:</strong> $payment_option</p>";
            } else {
                echo "Error updating stock: " . $conn->error;
            }
        } else {
            echo "Error inserting order details: " . $conn->error;
        }

        // Close connection
        $conn->close();
        ?>
          <a class="back-button" href="javascript:history.back()">Back</a>
    </div>
</body>
</html>
