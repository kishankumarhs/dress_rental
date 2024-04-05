<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Dresses</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .in-stock {
            color: green;
        }
        
        .out-of-stock {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Wardrobe Wonders</h1>
        <center><h2><u>Available Dresses</u></h2></center>
        <div class="dresses-container" id="dresses-container">
            <!-- Dresses will be dynamically added here -->
        </div>
    </div>

    <script>
        fetch('get_dresses.php')
            .then(response => response.json())
            .then(data => {
                const dressesContainer = document.getElementById('dresses-container');
                if (Array.isArray(data)) {
                    data.forEach(dress => {
                        const stockStatus = dress.stock > 0 ? '<span class="in-stock">In Stock</span>' : '<span class="out-of-stock">Out of Stock</span>';
                        const dressCard = `
                            <div class="dress-card">
                                <img src="${dress.dress_img}" alt="${dress.dress_name}">
                                <div class="dress-details">
                                    <h2>${dress.dress_name} ${stockStatus}</h2>
                                    <p>Price: Rs. ${dress.dress_price} /day</p>
                                    <form class="rent-form" onsubmit="return rentDress('${dress.dress_name}')">
    <input type="hidden" name="dress_name" value="${dress.dress_name}">
    <input type="hidden" name="dress_price" value="${dress.dress_price}">
    <label for="days">Number of days:</label>
    <input type="number" id="days" name="days" min="1" required>
    <input type="submit" value="Rent" ${dress.stock === 0 ? 'disabled' : ''}>
</form>
                                </div>
                              

                            </div>
                        `;
                        dressesContainer.innerHTML += dressCard;
                    });
                } else {
                    console.error('Invalid data format:', data);
                }
            })
            .catch(error => console.error('Error fetching dresses:', error));

        function rentDress(event, dressName, dressPrice, stock) {
            event.preventDefault(); // Prevent form submission

            const days = document.getElementById('days').value;

            if (!days || isNaN(days) || days < 1) {
                alert('Please enter a valid number of days.');
                return false;
            }

            if (stock === 0) {
                alert('This dress is out of stock.');
                return false;
            }

            fetch('generate_bill.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    dress_name: dressName,
                    dress_price: dressPrice,
                    days: days
                })
            })
            .then(response => response.text())
            .then(data => {
                // Display the invoice bill
                document.getElementById('dresses-container').innerHTML = data;
            })
            .catch(error => {
                console.error('Error generating bill:', error);
                alert('An error occurred while generating the invoice.');
            });

            return false;
        }
    </script>
</body>
</html>
