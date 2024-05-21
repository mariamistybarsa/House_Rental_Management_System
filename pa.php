<?php
session_start(); // Start the session

// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_email']) && isset($_POST['login_password'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_rl";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $login_email = mysqli_real_escape_string($conn, $_POST['login_email']);
    $login_password = mysqli_real_escape_string($conn, $_POST['login_password']);

    $sql = "SELECT * FROM tb_rl WHERE email='$login_email' AND password='$login_password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Login successful
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $login_email;
        header("Location: Admindynamic.php");
        exit(); // Make sure to exit after redirection
    } else {
        // Login failed
        echo "Invalid email or password!";
    }

    mysqli_close($conn);
}

// Check if the signup form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['designation']) && isset($_POST['contact'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_rl";

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

    $sql = "INSERT INTO tb_rl (id, name, email, password, designation, contact) VALUES ('$id', '$name', '$email', '$password', '$designation', '$contact')";
    if (mysqli_query($conn, $sql)) {
        // Redirect to admin_dynamic.php after successful signup
        header("Location: Admindynamic.php");
        exit(); // Make sure to exit after redirection
    } else {
        echo "error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}

include_once('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Sign Up and Login</title>

    <style>
        /* Your CSS styles here */
    </style>
</head>

<body>

    <main>
        <div class="signup-container">
            <h2>Sign Up</h2>
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
                    <input type="password" id="password" name="password" required>
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

        <div class="login-container">
            <h2>Login</h2>
            <form id="login-form" method="post">
                <div class="form-group">
                    <label for="login_email">Email:</label>
                    <input type="text" id="login_email" name="login_email" required>
                </div>
                <div class="form-group">
                    <label for="login_password">Password:</label>
                    <input type="password" id="login_password" name="login_password" required>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </main>

    <?php include_once('footer.php'); ?>
</body>

</html>