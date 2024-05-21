<?php
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

// Check if the ID is set in the URL
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // SQL to delete a record
    $sql = "DELETE FROM tb_bill WHERE Renter_id=$id";

    if ($conn->query($sql) === TRUE) {
        // Redirect to BillA.php upon successful deletion
        header("Location: BillA.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request. Please provide an ID.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Bill</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        p {
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Delete Bill</h2>
        <p>Redirecting to <a href="BillA.php">BillA.php</a>...</p>
    </div>
</body>
</html>