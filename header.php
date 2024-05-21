<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body {
  background-image: url('pic.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: black;
  padding: 20px 10px;
  border-radius: 10px 50px;
  text-align: center; /* Center align the text */
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

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
  border-radius: 25px;
}

.header-right {
  float: right;
}

.header-middle {
  display: inline-block; /* Ensures the text is centered */
  color: white;
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
<body>

<header>
  <div class="header">
    <div class="header-middle">
      <p>House Rent Management System</p>
    </div>
    <div class="header-right">
      <a href="first.php">Home</a>
      <a href="#about">About</a>
      <a href="Room.php">Room</a>
      <a href="employee_renter.php">Employee</a>
      <a href="payment.php">Payment</a>
      <a class="active" href="dynamic2.php">Login</a>
    </div>
  </div>
</header>

</body>
</html>