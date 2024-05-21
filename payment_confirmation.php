<?php
// Define your database connection parameters
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Retrieve payment details from the form submission
$renter_name = $_POST['renter_name'];
$paid_bill = $_POST['paid_bill'];
$due_bill = $_POST['due_bill'];
$payment_date = date("Y-m-d"); // Assuming payment date is today

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement to insert payment details into the database
$sql = "INSERT INTO payments (renter_name, paid_bill, due_bill, payment_date)
        VALUES ('$renter_name', '$paid_bill', '$due_bill', '$payment_date')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "<p class='confirmation-message'>Payment recorded successfully.</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1 {
            margin-top: 50px;
            font-size: 36px;
        }
        .confirmation-message {
            margin-top: 20px;
            font-size: 18px;
        }
        .back-link {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Payment Confirmation</h1>

    <!-- PHP code to display confirmation message -->

    <!-- Link to another page for further actions -->
    <a href="view_payment.php" class="back-link">View Payment Details</a>
</body>
</html>