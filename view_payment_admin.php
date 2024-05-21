<html>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

          <style>
        body {
           
            text-align: center;
        }


tr{

background-color:pink;

  padding: 8px;
font-size:14px;
}

th
{
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
border:1px solid white;


}


        table {
      width: 100%;
    border-collapse: collapse;
        }
        td {
            border: 1px solid #ddd;
           border: 1px solid #ddd;
    padding: 20px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;

        }
        form {
            margin-bottom: 20px;
        }
    </style></head>
<body>











<?php
     
        include_once ('headerwhite.php');

?>


<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_rt";

// Retrieve payment details from the form
$id = $_POST['id'];
$paid_bill = $_POST['paid_bill'];
$due_bill = $_POST['due_bill'];
$payment_date= $_POST['payment_date'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert payment details into the database
$sql = "INSERT INTO payments (id, paid_bill, due_bill, payment_date)
        VALUES ('$id', '$paid_bill', '$due_bill', '$payment_date')";

if ($conn->query($sql) === TRUE) {
    // Redirect to view payment details page after successful payment
    header("Location: view_payment.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php
     include_once ('footer.php');

   
     
        ?>


</html>