
<html>
<!DOCTYPE html>
<html lang="en">
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
        }
        
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        label {
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px;
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

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_bill";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the record for the specified ID
    $sql = "SELECT * FROM tb_bill WHERE Renter_id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Display a form for updating the bill information
?>

    </style>
</head>
<body>
    <div class="container">
        <h2>Update Bill Information</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" name="id" value="<?php echo $row['Renter_id']; ?>">
            <label for="renter_name">Renter Name:</label>
            <input type="text" id="renter_name" name="renter_name" value="<?php echo $row['Renter_name']; ?>"><br><br>
            <label for="paid_bill">Paid Bill:</label>
            <input type="text" id="paid_bill" name="paid_bill" value="<?php echo $row['Paid_Bill']; ?>"><br><br>
            <label for="due_bill">Due Bill:</label>
            <input type="text" id="due_bill" name="due_bill" value="<?php echo $row['Due_Bill']; ?>"><br><br>
            <label for="paid_date">Paid Date:</label>
            <input type="date" id="paid_date" name="paid_date" value="<?php echo $row['Paid_Date']; ?>"><br><br>
            <label for="total_bill">Total Bill:</label>
            <input type="text" id="total_bill" name="total_bill" value="<?php echo $row['Total_bill']; ?>"><br><br>
            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>
<?php
    } else {
        echo "No record found with the given ID.";
    }
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $id = $_POST['id'];
    $renter_name = $_POST['renter_name'];
    $paid_bill = $_POST['paid_bill'];
    $due_bill = $_POST['due_bill'];
    $paid_date = $_POST['paid_date'];
    $total_bill = $_POST['total_bill'];

    // Update the record in the database
    $sql = "UPDATE tb_bill SET Renter_name='$renter_name', Paid_Bill='$paid_bill', Due_Bill='$due_bill', Paid_Date='$paid_date', Total_bill='$total_bill' WHERE Renter_id='$id'";

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header("Location: BillA.php"); // Redirect to BillA.php upon successful update
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
</html>