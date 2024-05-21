<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_emp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if ID parameter is set in the URL
if(isset($_GET['id']) && !empty($_GET['id'])) {
    // Check if the update form has been submitted
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $type = $_POST['type'];
        $contact = $_POST['contact'];
      

        $sql = "UPDATE tb_emp SET name=?, email=?, type=?, contact=? WHERE id=?";
        $stmt = mysqli_prepare($conn, $sql);
        
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "ssssi", $name, $email, $type, $contact, $id);
        
        
        // Execute the prepared statement
        if(mysqli_stmt_execute($stmt)) {
            // Redirect to the search page after successful update
            header("Location: employee.php");
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    }

    // Fetch the existing data for the given ID
    $id= $_GET['id'];
    $sql = "SELECT * FROM tb_emp WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    // Close statement
    mysqli_stmt_close($stmt);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        form {
            margin: 20px auto;
            width: 60%;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Update Record</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . '?id=' . $_GET['id']); ?>">

        <label for="name">Employee_name</label>
<input type="text" id="name" name="name" value="<?php  $row['name']; ?>" required>
        <label for="email">emplyoee_Email</label>
        <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>" required><br>
       <label for="type">Employee_type</label>
        <input type="text" id="type" name="type" value="<?php echo $row['type']; ?>" required><br>
        <label for="contact">Employee_contact</label>
        <input type="text" id="contact" name="contact" value="<?php echo $row['contact']; ?>" required><br>



<input type="submit" value="Update">
    </form>

</body>
</html>

<?php
// Close connection
mysqli_close($conn);
?>
