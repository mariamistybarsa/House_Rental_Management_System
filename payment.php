<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        form {
            margin-top: 50px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            padding: 8px;
            width: 200px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php
     
        include_once ('header_renter.php');

?>
    <h1>Enter Payment Information</h1>
    <form action="process_payment.php" method="POST">
        <label for="Renter_id">Renter_id:</label>
        <input type="text" id="Renter_id" name="Renter_id" required><br>

 <label for="Renter_name">Renter_name:</label>
        <input type="text" id="Renter_name" name="Renter_name" required><br>

 <label for="Paid_bill">Paid_bill:</label>
        <input type="text" id="Paid_bill" name="Paid_bill" required><br>
        <label for="Due_bill">Due_bill:</label>
        <input type="text" id="Due_bill" name="Due_bill" required><br>
 <label for="Paid_date">Paid_date:</label>
<input type="text" id="Paid_date" name="Paid_date" required><br>

<label for="Total_bill">Total_bill:</label>
<input type="text" id="Total_bill" name="Total_bill" required><br>

        <input type="submit" value="Make Payment">
    </form>

<?php
     include_once ('footer.php');

   
     
        ?>

</body>
</html>