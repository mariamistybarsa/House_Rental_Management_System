<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>Search Page</title>
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f8f8f8;
        }

        /* Form styles */
        form {
            margin-bottom: 20px;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: white;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: green;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Update and Delete link styles */
        a {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 14px;
            color: white; /* Default link color */
            margin-right: 5px; /* Add space between links */
        }

        a.update-link {
            background-color: #007bff; /* Blue color for update */
        }

        a.update-link:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        a.delete-link {
            background-color: #dc3545; /* Red color for delete */
        }

        a.delete-link:hover {
            background-color: #c82333; /* Darker red on hover */
        }

        /* Button styles */
        button, .print-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 10px;
        }

        button:hover, .print-button:hover {
            background-color: #45a049;
        }

        /* Print button */
        .print-button {
            background-color: #008CBA;
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

        <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <a href="mam.php" class="print-button">Print here</a>
            <a href="s1.php" class="print-button">Search here</a>

            <?php
            // Database connection and query
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db_rt";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // SQL query
            $sql = "SELECT * FROM tb_rntt";
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $id = $_GET['id'];
                $sql .= " WHERE id = $id";
            }

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo "<table><tr><th>Renter ID</th><th>Renter Name</th><th>Renter Email</th><th>Renter Flat No.</th><th>Renter Blood Group</th><th>Renter NID</th><th>Renter Designation</th><th>Renter Contact</th><th>Action</th></tr>";
                
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["fln"] . "</td><td>" . $row["blood"] . "</td><td>" . $row["nid"] . "</td><td>" . $row["desig"] . "</td><td>" . $row["contact"] . "</td>";
                    
                    // Update and delete links
                    echo "<td><a href='update_renter_admin.php?id=" . $row['id'] . "' class='update-link'>Update</a> | <a href='delete_renter_admin.php?id=" . $row['id'] . "' class='delete-link'>Delete</a></td></tr>";
                }

                echo "</table>";
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
            ?>

            <button type="button"><a href="Admindynamic.php" style="color: white;">Back</a></button>
        </form>
    </main>
</body>
<?php
     include_once ('footer.php');

   
     
        ?>
</html>