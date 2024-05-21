<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body {
  background-color:white;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color:black;
  padding: 20px 10px;
border-radius:10px 50px;
}

.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
border-radius:25px;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<header>
<div class="header">
  <a href="#default" class="logo">HOUSE</a>
  <div class="header-right">
    <a href="#home">Home</a>
    
    <a href="#about">About</a>
  <a href="#home">Home</a>
    <a href="s.php">Renter</a>
    <a href="BillA.php">Bill</a>
    <a href="employee.php">Employee</a>
   <a href="view_payment.php">Payment_details</a>
 <a class="active" href="dynamic.php">LogOut</a>
  </div>
</div>

<div style="padding-left:20px">

</div>
</header>
</body>
</html>
