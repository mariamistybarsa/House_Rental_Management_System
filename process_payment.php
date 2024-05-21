<?php 
$servername="localhost";
 $username="root"; 
$password="";
 $dbname="db_bill"; 
$conn=mysqli_connect($servername,$username,$password,$dbname); 
if(!$conn) { echo"not done"; } else echo"done"; 
$sql="INSERT INTO tb_bill(Renter_id,Renter_name,Paid_bill,Due_bill,Paid_date,Total_bill) VALUES('$_POST[Renter_id]','$_POST[Renter_name]','$_POST[Paid_bill]','$_POST[Due_bill]','$_POST[Paid_date]','$_POST[total_bill]')";
 if(mysqli_query($conn,$sql)) { echo"success!!"; 


header("Location:dynamic_renter.php");








} 
else { echo"error"; } 
mysqli_close($conn); 
?>