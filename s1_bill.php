<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
        }

        th {
            background-color: green;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        /* Form styles */
        form {
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 10px;
            width: 300px;
            margin-right: 10px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Print button */
        .print-button {
            background-color: #008CBA;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-right: 10px;
        }

        .print-button:hover {
            background-color: #005f6b;
        }
    </style>
</head>
<?php
     
        include_once ('headerwhite.php');

?>
<body>
    <main>
        <h2>Search ID</h2>

        <form method="get" action="">
            <input type="text" name="Renter_id" placeholder="Search ID..." required>
            <button type="submit"><i class="fa fa-search"></i> Search</button>
        </form>

        <?php
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_bill";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if the ID is provided in the GET request
        if (isset($_GET['Renter_id']) && !empty($_GET['Renter_id'])) {
            // Convert the ID to an integer and query the database
            $Renter_id = intval($_GET['Renter_id']); // Ensuring the ID is an integer to prevent SQL injection
            $sql = "SELECT * FROM tb_bill WHERE Renter_id = $Renter_id";

            // Execute the query
            $result = $conn->query($sql);

            // Check if results were returned
            if ($result->num_rows > 0) {
                // Display the data in a table
                echo '<table>';
                echo '<tr>';
                echo '<th>Renter_id</th>';
                echo '<th> Renter_name</th>';
                echo '<th>Paid_Bill</th>';
                echo '<th>Due_Bill</th>';
                  
echo '<th>Paid_Date</th>';

echo '<th>Total_bill</th>';
echo '<th>Action</th>';
                echo '</tr>';

                // Fetch the data and display it
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($row['Renter_id']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['Renter_name']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['Paid_Bill']) . '</td>';
echo '<td>' . htmlspecialchars($row['Due_Bill']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['Paid_Date']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['Total_bill']) . '</td>';
                  
                    echo "<td><a href='update_bill_admin.php?id=".$row['Renter_id']."'>Update</a> | <a href='delete_admin_bill.php?id=".$row['Renter_id']."'>Delete</a></td></tr>";

                

                    echo '</tr>';
                }

                echo '</table>';
            } else {
                echo '<p>No results found for ID: ' . htmlspecialchars($id) . '</p>';
            }
        }

        // Close the connection
        $conn->close();
        ?>

        <!-- Print button -->
        <a href="mam.php" class="print-button">Print</a>

        <!-- Back button -->
        <button type="button"><a href="Admindynamic.php" style="color: white; text-decoration: none;">Back</a></button>
    </main>
</body>

</html>