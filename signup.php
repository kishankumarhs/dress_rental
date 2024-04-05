<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
          body {
            background-image: url('assets/d.jpg'); /* Replace 'background.jpg' with your image file */
            background-size: cover;
            background-size: contains;
            background-position: center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 90vh;
        }

        /* Container */
        .container {
            width: 450px;
            margin: 100px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background */
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Shadow effect */
        }

        .input-group {
            margin-bottom: 15px;
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
            border-radius: 5px;
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
    </style>
</head>
<body>
<div class="container">
    <h2>Sign Up</h2>
    <form action="signup_process.php" method="post" onsubmit="return validateForm()">
        <div class="input-group">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="firstName" required>
        </div>
        <div class="input-group">
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="lastName" required>
        </div>
        <div class="input-group">
            <label for="mobileNumber">Mobile Number</label>
            <input type="text" id="mobileNumber" name="mobileNumber" required>
        </div>
        <div class="input-group">
            <label for="gmail">Gmail</label>
            <input type="email" id="gmail" name="gmail" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <button type="submit" class="btn">Sign Up</button>
    </form>
</div>
<script>
    function validateForm() {
        var firstName = document.getElementById('firstName').value;
        var lastName = document.getElementById('lastName').value;
        var mobileNumber = document.getElementById('mobileNumber').value;
        var gmail = document.getElementById('gmail').value;
        var password = document.getElementById('password').value;
        var username = document.getElementById('username').value;
        var numericRegex = /^[0-9]+$/;

        // Validation for First Name
        if (firstName.match(numericRegex)) {
            alert("First Name should not contain numeric characters");
            document.getElementById('firstName').focus(); // Focus on the input field
            return false;
        }

        // Validation for Last Name
        if (lastName.match(numericRegex)) {
            alert("Last Name should not contain numeric characters");
            document.getElementById('lastName').focus(); // Focus on the input field
            return false;
        }

        // Validation for Mobile Number
        if (!mobileNumber.match(numericRegex) || mobileNumber.length !== 10) {
            alert("Mobile Number should contain exactly 10 numeric characters");
            document.getElementById('mobileNumber').focus(); // Focus on the input field
            return false;
        }

        // Validation for Gmail
        if (!gmail.endsWith("@gmail.com")) {
            alert("Invalid Gmail format. Please enter a valid Gmail address.");
            document.getElementById('gmail').focus(); // Focus on the input field
            return false;
        }

        // Validation for Password
        if (password.length < 3 || password.length > 15) {
            alert("Password should be between 3 and 15 characters");
            document.getElementById('password').focus(); // Focus on the input field
            return false;
        }

        // Validation for Username
        if (username.length < 3 || username.length > 15) {
            alert("Username should be between 3 and 15 characters");
            document.getElementById('username').focus(); // Focus on the input field
            return false;
        }

        return true; // Form submitted successfully if all validations pass
    }
</script>

</body>
</html>
