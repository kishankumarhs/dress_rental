<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome for icons -->
    <style>
        body {
            background-image: url('assets/k.jpg'); /* Replace 'background.jpg' with your image file */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 30vh;
            align-items: center; 
        }

        /* Container */
        .container {
            width: 450px;
            margin: 100px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background */
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Shadow effect */
            position: center; /* Added for positioning the home icon */
            align-items: center; 
        }

        h2 {
            color: #333;
        }

        .contact-info {
            margin-top: 20px;
        }

        .contact-info p {
            margin-bottom: 10px;
        }

        .contact-info i {
            margin-right: 10px;
            color: #666;
        }

        .contact-info a {
            color: #333;
            text-decoration: none;
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

        .contact-info a:hover {
            text-decoration: underline;
        }

        .back-button {
            background-color: #4CAF50; /* Green background */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-bottom: 20px; /* Add margin to separate from other content */
            cursor: pointer;
            border-radius: 8px;
        }

        .back-button:hover {
            background-color: #45a049; /* Darker green on hover */
        }

        /* Home icon */
        .home-icon {
            position: absolute;
            top: 5px;
            left: 5px;
            color: #333;
            font-size: 24px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Home icon -->
        <i class="fas fa-home home-icon" onclick="goToHomePage()"></i>
        <div class="centered-text">
            <h1>Wardrobe Wonders</h1>
        </div>
        <h2>Contact Us</h2>
        <div class="contact-info">
            <p><i class="fas fa-building"></i> Wardrobe Wonders</p>
            <p><i class="fas fa-phone"></i> +1234567890</p>
            <p><i class="fas fa-map-marker-alt"></i> 123 Street, City, Country</p>
            <p><i class="fas fa-envelope"></i> info@wardrobewonders.com</p>
            <p><i class="fab fa-instagram"></i> <a href="https://www.instagram.com/wardrobewonders">wardrobewonders</a></p>
            <p><i class="fas fa-globe"></i> <a href="http://www.wardrobewonders.com">www.wardrobewonders.com</a></p>
        </div>
    </div>
    <script>
        function goToHomePage() {
            // Replace 'index.php' with the URL of your home page
            window.location.href = 'index.php';
        }
    </script>
</body>
</html>
