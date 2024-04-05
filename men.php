<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Dresses</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Wardrobe Wonders</h1>
        <center><h2><u>Available Dresses</u></h1></center>
        <div class="dresses-container" id="dresses-container">
            <!-- Dresses will be dynamically added here -->
            <?php
            // Fetch dress data from PHP script
            $dresses_json = file_get_contents('get_dresses.php');

            // Check if data retrieval was successful
            if ($dresses_json === false) {
                echo 'Error fetching dress data';
            } else {
                // Decode JSON data
                $dresses = json_decode($dresses_json);

                // Check if JSON decoding was successful and dresses is an array
                if (is_array($dresses)) {
                    // Iterate over dresses data
                    foreach ($dresses as $dress) {
                        echo '
                            <div class="dress-card">
                                <img src="' . $dress->dress_img . '" alt="' . $dress->dress_name . '">
                                <div class="dress-details">
                                    <h2>' . $dress->dress_name . '</h2>
                                    <p>Price: Rs. ' . $dress->dress_price . ' /day</p>
                                    <form class="rent-form" action="generate_bill.php" method="post">
                                        <input type="hidden" name="dress_name" value="' . $dress->dress_name . '">
                                        <input type="hidden" name="dress_price" value="' . $dress->dress_price . '">
                                        <label for="days">Number of days:</label>
                                        <input type="number" id="days" name="days" min="1" required>
                                        <input type="submit" value="Rent">
                                    </form>
                                </div>
                            </div>
                        ';
                    }
                } else {
                    echo '';
                }
            }
            ?>
        </div>
    </div>

    <script>
        // No changes needed in JavaScript part
        fetch('get_dresses.php')
            .then(response => response.json())
            .then(data => {
                const dressesContainer = document.getElementById('dresses-container');
                data.forEach(dress => {
                    const dressCard = `
                        <div class="dress-card">
                            <img src="${dress.dress_img}" alt="${dress.dress_name}">
                            <div class="dress-details">
                                <h2>${dress.dress_name}</h2>
                                <p>Price: Rs. ${dress.dress_price} /day</p>
                                <form class="rent-form" action="generate_bill.php" method="post">
                                    <input type="hidden" name="dress_name" value="${dress.dress_name}">
                                    <input type="hidden" name="dress_price" value="${dress.dress_price}">
                                    <label for="days">Number of days:</label>
                                    <input type="number" id="days" name="days" min="1" required>
                                    <input type="submit" value="Rent">
                                </form>
                            </div>
                        </div>
                    `;
                    dressesContainer.innerHTML += dressCard;
                });
            })
            .catch(error => console.error('Error fetching dresses:', error));
    </script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
