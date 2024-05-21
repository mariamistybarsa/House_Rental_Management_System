
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            color: #333;
            background-image: url('pic.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .payment-container {
            width: 80%;
            max-width: 500px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
        }

        .payment-form {
            text-align: left;
        }

        .payment-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .payment-form input[type="text"],
        .payment-form input[type="number"],
        .payment-form input[type="date"],
        .payment-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .payment-form button {
            padding: 10px 20px;
            background-color: #555;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .payment-form button:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <h2>Payment</h2>
        <form class="payment-form" method="post" action="process_payment.php">
            <label for="card_number">Card Number:</label>
            <input type="text" id="card_number" name="card_number" placeholder="Enter your card number" required>

            <label for="expiration_date">Expiration Date:</label>
            <input type="date" id="expiration_date" name="expiration_date" required>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" required>

            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" placeholder="Enter payment amount" required>

            <button type="submit">Pay Now</button>
        </form>
    </div>
</body>
</html>