<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
           
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: black; /* Set font color to black */
        }

        h1 {
          
            font-size: 36px;
            color:white; /* Change heading color to green */
        }

        h2 {
            margin-top: 20px;
            color: black; /* Set heading font color to black */
        }

        .search-form {
            margin-bottom: 20px;
        }

        .search-form input[type="text"] {
            width: 200px;
            padding: 8px;
            border: gray; /* Set input border color to dark gray */
            border-radius: 4px;
            box-sizing: border-box;
            margin-right: 5px;
        }

        .search-form button {
            padding: 8px 12px;
            background-color: #333; /* Set button background color to dark gray */
            color: #fff; /* Set button font color to white */
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #333; /* Set table border color to dark gray */
            padding: 12px;
        }

        th {
            background-color: #333; /* Set table header background color to dark gray */
            color: #fff; /* Set table header font color to white */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:nth-child(odd) {
            background-color: #f2f2f2;
        }


        a.back-button {
            display: inline-block;
            padding: 8px 16px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
        }

        a.back-button:hover {
            background-color: #555;
        }

        .contact-options {
            margin-top: 50px;
        }

        .contact-options a {
            display: inline-block;
            margin: 0 10px;
            padding: 10px 20px;
            background-color: #333; /* Set contact options background color to dark gray */
            color: #fff; /* Set contact options font color to white */
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .contact-options a:hover {
            background-color: #555;
        }
    </style>
</head>
<?php
     
        include_once ('header_renter.php');

?>
<body>

<main>

    <h1>Welcome to Employee Search</h1>



    <form class="search-form" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" placeholder="Search by ID" name="id">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_emp";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

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
        echo "<table>
                <tr>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Employee Email</th>
                    <th>Employee Type</th>
                    <th>Employee Contact</th>
                    <th>Bill</th>
                    <th>Free Slot</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["type"]."</td>
                    <td>".$row["contact"]."</td>
                    <td>".$row["bill"]."</td>
                    <td>".$row["free"]."</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    ?>

    <a href="Admindynamic.php" class="back-button">Back</a>

    <div class="contact-options">
        <a href="@example.com">Contact Us</a>
        <a href="tel:0089389">Call Us</a>
    </div>
</body>
</main>
<?php
     include_once ('footer.php');

   
     
        ?>


</html>