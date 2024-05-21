<?php 
$servername="localhost";
 $username="root"; 
$password="";
 $dbname="db_rt"; 
$conn=mysqli_connect($servername,$username,$password,$dbname); 
if(!$conn) { echo"not done"; } else echo"done"; 
$sql="INSERT INTO tb_rntt(id,name,email,fln,blood,nid,desig,contact) VALUES('$_POST[id]','$_POST[name]','$_POST[email]','$_POST[fln]','$_POST[blood]','$_POST[nid]','$_POST[desig]','$_POST[contact]')";
 if(mysqli_query($conn,$sql)) { echo"success!!";  
    header("Location:s.php");
}
else { echo"error"; } 
mysqli_close($conn); 
?>