<html>
<?php
     
        include_once ('headerwhite.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Payment Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        table {
            margin: 50px auto;
            border-collapse: collapse;
            width: 80%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Payment Details</h1>
    <table>
        <tr>
            <th>Renter ID</th>
            <th>Paid Bill</th>
            <th>Due Bill</th>
            <th>Payment Date</th>
        </tr>
        <?php
        // Fetch payment details from the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_rt";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve payment details from the database
        $sql = "SELECT * FROM payments";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["paid_bill"]."</td>
                        <td>".$row["due_bill"]."</td>
                        <td>".$row["payment_date"]."</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No payment records found</td></tr>";
        }

        $conn->close();
        ?>
    </table>


</body>
</html>
<?php
     include_once ('footer.php');

   
     
        ?>


</html>