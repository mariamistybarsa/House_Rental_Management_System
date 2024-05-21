<?php 
$servername="localhost";
 $username="root"; 
$password="";
 $dbname="db_renter"; 
$conn=mysqli_connect($servername,$username,$password,$dbname); 
if(!$conn) { echo"not done"; } else echo"done"; 
$sql="INSERT INTO tb_user_login(id,name,email,pass) VALUES('$_POST[id]','$_POST[name]','$_POST[email]','$_POST[pass]')";
 if(mysqli_query($conn,$sql)) { echo"success!!";  
    header("Location:dynamic_renter.php");
}
else { echo"error"; } 
mysqli_close($conn); 
?>