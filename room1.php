<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Online footer</title>
<style>

 .main {
  float: left;
  width: 60%;
  padding: 0 20px;
  overflow: hidden;
margin-top: 150px;
 text-align: center;
  color: white;



}

h1 {
  font-size: 40px;
font:bold black;
  font-weight: 900;
}
</style>
<?php
     
        include_once ('header_renter.php');

?>
  <div class="main">
    <h1>Welcome to House Rental Management System</h1>
<section class="room">
      <img src="room1.jpg" alt="Room 1">
      <div class="room-info">
        <h2>Room 1</h2>
        <p>Price: $1000/month</p>
        <button>Book Now</button>
      </div>
    </section>
    <section class="room">
      <img src="room2.jpg" alt="Room 2">
      <div class="room-info">
        <h2>Room 2</h2>
        <p>Price: $1200/month</p>
        <button>Book Now</button>
      </div>
    </section>
    <!-- Add more room sections as needed -->
 

    <p></p>
  </div>
  </main>
<?php
     include_once ('footer.php');

   
     
        ?>


</html>