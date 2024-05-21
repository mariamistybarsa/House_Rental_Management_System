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
button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        /* Print button */
        .print-button {
            background-color: #008CBA;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none; /* Remove underline */
            display: inline-block; /* Ensure button behaves like inline element */
            margin-right: 10px;
        }
        .print-button:hover {
            background-color: #005f6b;
        }

    </style>
      
</head>

<main>

 </style>
<?php
     
        include_once ('headerwhite.php');

?>


    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
       
       
       <form class="example"style="margin:auto;max-width:300px">

</form>
<main>
    


  
  <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <a href="mam.php" class="print-button">Print here</a>
            <a href="s1_bill.php" class="print-button">Search here</a>

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


    $sql = "SELECT * FROM tb_bill";
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $sql .= " WHERE Renter_id = $id";
    }


    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th> Renter_id</th>
<th> Renter_name</th>
<th>Paid_Bill</th>
<th>Due_Bill</th>
<th> Paid_Date</th>
<th> Total_bill</th>
<th>Action</th>
</tr>";
    while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row["Renter_id"]."</td><td>".$row["Renter_name"]."</td><td>".$row["Paid_Bill"]."</td><td>".$row["Due_Bill"]."</td><td>".$row["Paid_Date"]."</td><td>".$row["Total_bill"]."</td>";
            echo "<td><a href='update_bill_admin.php?id=".$row['Renter_id']."'>Update</a> | <a href='delete_admin_bill.php?id=".$row['Renter_id']."'>Delete</a></td></tr>";

        }
        echo "</table>";
    } else {
        echo "0 results";
    }

 
    mysqli_close($conn);
    ?>

<button type="button" >
<a href ="Admindynamic.php">Back</a></button>
<?php
     include_once ('footer.php');

   
     
        ?>
</main>
</html>
