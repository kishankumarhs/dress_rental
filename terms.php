<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions</title>
    <style>
   
            body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f8f8f8;
    color: #333;
    background-image: url('assets/m.jpg'); /* Add the URL of your background image here */
    background-size: cover; /* Adjust background size as needed */
    background-position: center; /* Adjust background position as needed */
}



        .container {
            max-width: 800px;
            margin: auto;
            padding: 100px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        .footer {
            margin-top: 50px;
            text-align: center;
            color: #666;
        }

        /* Home icon */
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
        .centered-text {
            position: relative;
            top: 7%;
            left: 90%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: black;
            font-size: 25px;
            font-family: "Allerta Stencil", sans-serif;
            /* Adjust font size and other properties as needed */
        }

        .home-icon:hover {
            opacity: 0.8;
        }

          .login-btn {
            float: right;
            margin-right: 5px;
            margin-top: 10px;
        }

        /* Centered text */
        .centered-text {
            position: absolute;
            top: 5%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            font-size: 18px;
            z-index: 1;
            color:royalblue;
        }
        .logo{
            position: absolute;
            top:-2%;
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
            font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
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
            top:3%;
            left:86%;
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

    </style>
</head>
<body>
    <div class="container">
    <div class="centered-text">
        <h1>Wardrobe Wonders</h1>
    </div>
    <h2>Dress Rental Terms and Conditions</h2>
    <ol>
        <li>
            <strong>Reservation and Payment:</strong> To reserve a dress, customers must provide payment in advance. Payment confirms the reservation and is non-refundable unless the cancellation is made within the specified time frame (e.g., 48 hours before the rental date).
        </li>
        <li>
            <strong>Rental Period:</strong> The rental period begins on the agreed-upon start date and ends on the return date specified during the reservation process. Any extension of the rental period must be approved by the rental provider and may be subject to additional charges.
        </li>
        <li>
            <strong>Condition of Dresses:</strong> Customers are responsible for returning the dress in the same condition it was received, with no significant damages, stains, or alterations. Any damage beyond normal wear and tear will result in additional charges.
        </li>
        <li>
            <strong>Cleaning Fees:</strong> Dresses must be returned in a clean condition. A cleaning fee may be charged if the dress is returned with excessive stains or odors that require professional cleaning.
        </li>
        <li>
            <strong>Late Returns:</strong> Customers are responsible for returning the dress on or before the agreed-upon return date. Late returns may result in additional charges, including late fees or the cost of replacing the dress if it prevents another customer from renting it.
        </li>
        <li>
            <strong>Cancellation Policy:</strong> Cancellations must be made within a specified time frame to qualify for a refund of the reservation fee. Late cancellations may result in forfeiture of the reservation fee.
        </li>
        <li>
            <strong>Sizing and Fit:</strong> Customers are responsible for selecting the appropriate size based on the provided sizing charts. Refunds or exchanges due to sizing issues may be subject to additional fees.
        </li>
        <li>
            <strong>Security Deposit:</strong> A security deposit may be required to cover any potential damages or late fees. The deposit will be refunded to the customer upon the satisfactory return of the dress.
        </li>
        <li>
            <strong>Ownership and Use:</strong> The rented dress remains the property of the rental provider at all times. Customers are not permitted to alter or modify the dress in any way.
        </li>
        <li>
            <strong>Liability:</strong> The rental provider is not liable for any injuries, accidents, or damages that occur while wearing the rented dress. Customers assume all responsibility for the proper use and care of the dress during the rental period.
        </li>
    </ol>
        <!-- Home icon -->
        <div class="home-icon" onclick="goToHomePage()"></div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Wardrobe Wonders. All rights reserved.</p>
    </div>
    

    <script>
        function goToHomePage() {
            window.location.href = 'index.php'; // Replace 'index.php' with the URL of your home page
        }
    </script>
</body>
</html>
