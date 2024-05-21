<!DOCTYPE html>
<html>
    <head>
        <title style="font-size:20px;"> Registry Management </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

        <style>






body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

h1 {
    text-align: center;
    color: #333;
}

marquee {
    text-align: center;
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

.table {
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

table {
    border-collapse: collapse;
    width: 100%;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: center;
}

th {
    background-color: #f2f2f2;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 20px;
}

button:hover {
    background-color: #45a049;
}

button.back {
    background-color: #f44336;
    margin-right: 10px;
}

button.back:hover {
    background-color: #d32f2f;
}










            .table{
                padding:10px;
                margin:110px;
            }

            table, th, td {
                border: 1px solid black;
                width:1000px;
                text-align:center;

            }
            p{
                font-family:helvatica;
                font-size:50px;
            }
        </style>

    </head>
    <body>
<center>
        <h1>House Rent Management System(Renter Information)</h1>
</center>
    <marquee>Renter Information</marquee>
    <header><div class="nav">
    
    </header>
    <div class="table"><div id="printableArea">
            <h2 align="center"> Payment </h2>
            <center>
                <table border="1" align="center">
                <!-- comment -->
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "db_bill";
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                     
        echo "<table><tr><th> Renter_id</th>
<th> Renter_name</th>
<th>Paid_Bill</th>
<th>Due_Bill</th>
<th> Paid_Date</th>
<th> Total_bill</th>

</tr>

</tr>";
                
                $sql = "SELECT * FROM tb_bill";
                $result = mysqli_query($conn,$sql);

                while ($test = mysqli_fetch_array($result)) {
                    $id = $test['Renter_id'];
                    echo "<tr align='center'>";
                    echo"<td><font color='black'>" . $test['Renter_id'] . "</font></td>";
                    echo"<td><font color='black'>" . $test['Renter_name'] . "</font></td>";
 echo"<td><font color='black'>" . $test['Paid_Bill'] . "</font></td>";
 echo"<td><font color='black'>" . $test['Due_Bill'] . "</font></td>";
 echo"<td><font color='black'>" . $test['Paid_Date'] . "</font></td>";
 echo"<td><font color='black'>" . $test['Total_bill'] . "</font></td>";
                     echo "</tr>";
                }
                mysqli_close($conn);
                ?>
            </table></div>
        <input type="button" onclick="printDiv('printableArea')" value="print!" />
         <button type="button" onclick="location.href = 'http://localhost/Last/s.php'">Back</button>
            </center>
            
        
        

            <script>
                function printDiv(divName) {
                    var printContents = document.getElementById(divName).innerHTML;
                    var originalContents = document.body.innerHTML;
                    document.body.innerHTML = printContents;
                    window.print();
                    document.body.innerHTML = originalContents;
                }</script><br>
           
            </body>
            </html>