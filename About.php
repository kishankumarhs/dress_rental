<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-image: url('assets/f.jpg'); /* Add the URL of your background image here */
    background-size: cover; /* Adjust background size as needed */
    background-position: center; /* Adjust background position as needed */
    height: 60hv;
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

        .home-icon:hover {
            opacity: 0.8;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }
        .about{
            font-size: 50px;
            color: black;
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

        .back-button:hover {
            background-color: #45a049; /* Darker green on hover */
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="centered-text">
        <h1>Wardrobe Wonders</h1><br>
    </div>
        <center><u><h1 div class="about">About us </h1></u></center>
        <h2>How Dress Rental Works</h2>
        <p>Dress rental is a convenient and cost-effective way to access designer clothing for special occasions without the need to purchase expensive items that may only be worn once. Here's how it works:</p>

        <ol>
            <li><strong>Browse:</strong> Browse our collection of dresses and choose the one that suits your style and occasion.</li>
            <li><strong>Reserve:</strong> Reserve the dress for your desired rental period. You can typically rent dresses for a few days or up to a week, depending on your needs.</li>
            <li><strong>Try On:</strong> Once reserved, the dress will be shipped to your address. Try on the dress to ensure it fits perfectly and meets your expectations.</li>
            <li><strong>Wear:</strong> Wear the dress to your event and enjoy looking stunning in designer attire.</li>
            <li><strong>Return:</strong> After your event, simply return the dress using the provided packaging and shipping label. No need to worry about dry cleaning—we take care of that for you!</li>
        </ol>

        <p>At Dress Rental, we strive to make the dress rental process as seamless as possible, providing high-quality designer dresses and excellent customer service.</p>
    </div>
    <div class="home-icon" onclick="goToHomePage()"></div>

  
     <script>
        function goToHomePage() {
            window.location.href = 'index.php'; // Replace 'index.php' with the URL of your home page
        }
    </script>
      <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
