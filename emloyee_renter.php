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
    <h2>Search id</h2>

    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
       
        <label for="id">ID:</label>
       
       <form class="example"style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="id">
  <button type="text"><i class="fa fa-search"></i></button>
</form>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_emp";

  
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $sql = "SELECT * FROM tb_emp";
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $sql .= " WHERE id = $id";
    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th> Employee_id</th>
<th> Employee_name</th>
<th> emplyoee_Email</th>
<th>Employee_type</th>
<th>Employee_contact</th>
<th> Bill</th>
<th> Free_Slot</th>

</tr>";
    





        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr> <td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["type"]."</td><td>".$row["contact"]."</td><td>".$row["bill"]."</td><td>".$row["free"]."</td>";
            echo "<td><a href='update_employee_admin.php?id=".$row['id']."'>Update</a> | <a href='delete_employee_admin.php?id=".$row['id']."'>Delete</a></td></tr>";

        }
        echo "</table>";
    } else {
        echo "0 results";
    }

 
    mysqli_close($conn);
    ?>

<button type="button" >
<a href ="Admindynamic.php">Back</a></button>
</body>
</html>
