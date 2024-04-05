<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
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
            color: #333;
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
        .payment-options {
            margin-top: 20px;
        }
        .payment-option {
            display: inline-block;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $dress_name = $_POST['dress_name'];
            $dress_price = $_POST['dress_price'];
            $rent_days = $_POST['days'];
            $advance=$_POST['advance'];

            // Validate input
            if (empty($dress_name) || empty($dress_price) || empty($rent_days)) {
                echo "<p>Error: All fields are required.</p>";
                exit;
            }

            // Calculate total price
            $total_price = $advance+$dress_price * $rent_days;

            // Generate bill
            echo "<h2>Invoice</h2>";
            echo "<p><strong>Dress Name:</strong> $dress_name</p>";
            echo "<p><strong>Rental Price per Day:</strong> Rs. $dress_price</p>";
            echo "<p><strong>Number of Days Rented:</strong> $rent_days</p>";
            echo "<p><strong>Total Price:</strong> Rs. $total_price</p>";
            echo "<ul>
                    <li><i>Thank you for renting with us!</i></li>
                    <li>Please pick your dress from our store</li> 
                    <li>Address: Wardrobe Wonders , SIT Backgate , Tumkur, 572103</li>
                    <li style='color:red'>Your advance amount will be returned once you return our dress without any damage and on time, or else extra charges will be applied.</li>
                  </ul>";
            
        } else {
            // If the form is not submitted properly
            echo "<p>Error: Invalid request.</p>";
        }
        ?>
         
        <a class="back-button" href="javascript:history.back()">Back</a>
        <form action="payment_successful1.php" method="post">
    <input type="hidden" name="dress_name" value="<?php echo $dress_name; ?>">
    <input type="hidden" name="dress_price" value="<?php echo $dress_price; ?>">
    <input type="hidden" name="days" value="<?php echo $rent_days; ?>">
    <div class="payment-options">
        <h3>Select Payment Option:</h3>
        <div class="payment-option">
            <input type="radio" id="cod" name="payment-option" value="Cash on Delivery">
            <label for="Cash on Delivery">Cash on Delivery</label>
        </div>
        <div class="payment-option">
            <input type="radio" id="upi" name="payment-option" value="UPI">
            <label for="UPI">UPI  - wardrobewonder@ybl</label>
        </div>
    
        <input type="submit" class="payment-button" value="Submit Payment">
    </div>
</form>

            <!-- Add more payment options as needed -->
        </div>
    </div>
</body>
</html>
