<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Payments</title>
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
    <h1>View Payments</h1>

    <?php
    // Database connection
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "db_rt";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch and display payment records
    $sql = "SELECT * FROM payments";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Renter Name</th>
                    <th>Paid Bill</th>
                    <th>Due Bill</th>
                    <th>Payment Date</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["renter_name"]."</td>
                    <td>".$row["paid_bill"]."</td>
                    <td>".$row["due_bill"]."</td>
                    <td>".$row["payment_date"]."</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>

</body>
</html>