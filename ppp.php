<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['designation']) && isset($_POST['contact'])) {
    $servername = "localhost";
    $username = "root"; 
    $password = "";
    $dbname = "db_adminlogin"; 

    $conn = mysqli_connect($servername, $username, $password, $dbname); 

    if (!$conn) { 
        die("Connection failed: " . mysqli_connect_error());
    }

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $designation = mysqli_real_escape_string($conn, $_POST['designation']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);

    $sql = "INSERT INTO  tb_adminlogin(id,name, email,password, designation, contact) VALUES ('$id', '$name', '$email', '$password', '$designation', '$contact')";
    if(mysqli_query($conn, $sql)) { 
        // Redirect to admin_dynamic.php after successful signup
        header("Location: Admindynamic.php");
        exit(); // Make sure to exit after redirection
    } else { 
        echo "error: " . mysqli_error($conn);
    }

    mysqli_close($conn); 
} else {
    echo "Please fill out all the required fields!";

}
include_once ('header.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dynamic_sign</title>

<style>
.signup-container {
  max-width: 400px;
  margin: 40px auto;
  background-color:#7B68EE;
  padding: 20px;
  border-radius: 10px 50px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h2 {
  text-align: center;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="text"],
input[type="text"],
input[type="text"],
input[type="text"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 10px 50px;
}

button {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius:  10px 50px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}
div.scrollmenu {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

.scrollmenu a:hover {
  background-color: #777;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}
</style>
</head>
<body>

<main>
<div class="signup-container">
    <h2>Admin</h2>
    <form id="signup-form" method="post">
      <div class="form-group">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required>
      </div>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="designation">Designation:</label>
        <input type="text" id="designation" name="designation" required>
      </div>
      <div class="form-group">
        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact" required>
      </div>
      <button type="submit">Sign Up</button>
      
    </form>
  </div>
</main>
<?php include_once ('footer.php'); ?>
</body>
</html>