<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_rt";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if ID parameter is set in the URL
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare a delete statement
    $sql = "DELETE FROM tb_rntt WHERE id = ?";
    
    // Attempt to prepare the SQL statement
    $stmt = mysqli_prepare($conn, $sql);
    
    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "i", $id);
    
    // Execute the prepared statement
    if(mysqli_stmt_execute($stmt)) {
        // Redirect to the search page after successful deletion
        header("Location: s.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close connection
mysqli_close($conn);
?>
