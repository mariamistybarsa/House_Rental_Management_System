<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <style>
        body {
            text-align: center;
        }

        tr {
            background-color: pink;
            padding: 8px;
            font-size: 14px;
        }

        th {
            padding-top: 12px;
            padding-bottom: 0px;
            text-align: left;
            background-color: green;
            color: white;
            border-collapse: collapse;
            border: 1px solid #ddd;
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            padding: 8px;
            border: 1px solid white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            border: 1px solid #ddd;
            padding: 20px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        form {
            margin-bottom: 20px;
        }

        .print-button {
            margin-bottom: 20px;
        }
    </style>
</head>
<main>
    <h2>Search ID</h2>

    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="id">ID:</label>
        <form class="example" style="margin:auto;max-width:300px">
            <input type="text" placeholder="Search.." name="id">
            <button type="text"><i class="fa fa-search"></i></button>
        </form>
    </form>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_rt";


    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $sql = "SELECT * FROM tb_rntt";
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $sql .= " WHERE id = $id";
    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>Renter_id</th>
<th>Renter_name</th>
<th>Renter_Email</th>
<th>Renter_flat_no</th>
<th>Renter_Blood_Group</th>
<th>Renter_NID</th>
<th>Renter_Designation</th>
<th>Renter_Contact</th>
<th>Action</th>
</tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr> <td>".$row["id"]."</td> <td>".$row["name"]."</td> <td>".$row["email"]."</td> <td>".$row["fln"]."</td> <td>".$row["blood"]."</td> <td>".$row["nid"]."</td>   <td>".$row["desig"]."</td> <td>".$row["contact"]."</td>";
            echo "<td><a href='update_renter_admin.php?id=".$row['id']."'>Update</a> | <a href='delete_admin_bill.php?id=".$row['id']."'>Delete</a></td></tr>";
        }

        echo "</table>";
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    ?>

    <button type="button" class="print-button" onclick="window.print()">Print</button>
    <button type="button">
        <a href="Admindynamic.php">Back</a>
    </button>
</main>
</html>