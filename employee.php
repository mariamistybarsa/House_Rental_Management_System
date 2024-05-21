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
    </style></head>
<?php
     include_once ('headerwhite.php');
   
     
        ?>
<body>
    <h2>Search id</h2>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <a href="mam.php" class="print-button">Print here</a>
            <a href="s1_employee.php" class="print-button">Search here</a>


    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_emp";

  
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $sql = "SELECT * FROM tb_emp";
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $sql .= " WHERE id = $id";
    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th> Employee_id</th>
<th> Employee_name</th>
<th> emplyoee_Email</th>
<th>Employee_type</th>
<th>Employee_contact</th>
<th> Bill</th>
<th> Free_Slot</th>
<th>Action</th>
</tr>";
    





        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr> <td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["type"]."</td><td>".$row["contact"]."</td><td>".$row["bill"]."</td><td>".$row["free"]."</td>";
            echo "<td><a href='update_employee_admin.php?id=".$row['id']."'>Update</a> | <a href='delete_employee_admin.php?id=".$row['id']."'>Delete</a></td></tr>";

        }
        echo "</table>";
    } else {
        echo "0 results";
    }

 
    mysqli_close($conn);
    ?>

<button type="button" >
<a href ="Admindynamic.php">Back</a></button>
</body>
<?php
     include_once ('footer.php');

   
     
        ?>
</html>
