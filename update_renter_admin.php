<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Renter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        main {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
        }

        form {
            text-align: left;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<main>
    <h2>Update Renter Information</h2>

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

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Check if the ID is set in the URL
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];

            // Fetch the record for the specified ID
            $sql = "SELECT * FROM tb_rntt WHERE id = $id";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                // Display a form for updating the renter information
    ?>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <label for="name">Renter Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>"><br>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>"><br>
                    <label for="fln">Flat No:</label>
                    <input type="text" id="fln" name="fln" value="<?php echo $row['fln']; ?>"><br>
                    <label for="blood">Blood Group:</label>
                    <input type="text" id="blood" name="blood" value="<?php echo $row['blood']; ?>"><br>
                    <label for="nid">NID:</label>
                    <input type="text" id="nid" name="nid" value="<?php echo $row['nid']; ?>"><br>
                    <label for="desig">Designation:</label>
                    <input type="text" id="desig" name="desig" value="<?php echo $row['desig']; ?>"><br>
                    <label for="contact">Contact:</label>
                    <input type="text" id="contact" name="contact" value="<?php echo $row['contact']; ?>"><br>
                    <input type="submit" value="Update">
                </form>
    <?php
            } else {
                echo "No record found with the given ID.";
            }
        } else {
            echo "Invalid request. Please provide an ID.";
        }
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect form data
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $fln = $_POST['fln'];
        $blood = $_POST['blood'];
        $nid = $_POST['nid'];
        $desig = $_POST['desig'];
        $contact = $_POST['contact'];

        // Update the record in the database
        $sql = "UPDATE tb_rntt SET name='$name', email='$email', fln='$fln', blood='$blood', nid='$nid', desig='$desig', contact='$contact' WHERE id='$id'";

        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
            // Redirect to s.php after updating
            header("Location: s.php");
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
    ?>
</main>
</body>
</html>