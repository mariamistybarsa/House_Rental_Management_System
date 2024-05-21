
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dynamic_sign</title>

<!-- Your HTML a<?php 

<?php include 'AdminDynamic.php'; ?>
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['Designation']) && isset($_POST['contact'])) {
    $servername = "localhost";
    $username = "root"; 
    $password = "";
    $dbname = "db_adminlogin"; 

    $conn = mysqli_connect($servername, $username, $password, $dbname); 

    if (!$conn) { 
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connection successful!";
    }

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $designation = mysqli_real_escape_string($conn, $_POST['Designation']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);

    $sql = "INSERT INTO tb_adminlogin(id, email, password, Designation, contact) VALUES ('$id', '$email', '$password', '$designation', '$contact')";
    if(mysqli_query($conn, $sql)) { 
        echo "Registration successful!";
    } else { 
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn); 
} else {
    echo "Please fill out all the fields!";
}
?>
</html>