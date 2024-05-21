<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental House Management - Payment</title>
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
    <h1>Rental House Management - Payment</h1>

    <form method="post" action="payment_confirmation.php">
        <label for="renter_name">Renter Name:</label>
        <input type="text" id="renter_name" name="renter_name" required>

        <label for="paid_bill">Paid Bill:</label>
        <input type="number" id="paid_bill" name="paid_bill" placeholder="Enter paid bill amount" required>

        <label for="due_bill">Due Bill:</label>
        <input type="number" id="due_bill" name="due_bill" placeholder="Enter due bill amount" required>

        <label for="payment_date">Payment Date:</label>
        <input type="date" id="payment_date" name="payment_date" required>

        <button type="submit">Make Payment</button>
    </form>

</body>
</html>