<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Room Rental</title>
  <link rel="stylesheet" href="styles.css">
</head>
<style>

body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
  background-color: #f8f9fa; /* Light background color */
}



nav ul {
  list-style-type: none;
}

nav ul li {
  display: inline;
  margin-right: 1rem;
}

nav ul li a {
  text-decoration: none;
  color: #fff;
}

main {
  padding: 2rem;
}

.room {
  margin-bottom: 2rem;
  background-color: #fff; /* Room container background color */
  border-radius: 8px; /* Rounded corners */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Shadow */
  overflow: hidden; /* Hide overflow */
}

.room img {
  width: 100%;
  max-width: 100%; /* Ensure image doesn't overflow container */
  height: auto;
  display: block; /* Prevent inline spacing issues */
}

.room-info {
  padding: 1.5rem;
}

.room-info h2 {
  margin-bottom: 0.5rem;
  color: #333; /* Darker text color */
}

.room-info p {
  margin-bottom: 1rem;
  color: #666; /* Lighter text color */
}

.room-info button {
  padding: 0.5rem 1rem;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s; /* Smooth transition */
}

.room-info button:hover {
  background-color: #555; /* Darker color on hover */
}

</style>

<body>

  <?php
     include_once ('header_renter.php');

   
     
        ?>

  
 
  <main>
    <section class="room">
    <img src="room.jpg" >
      <div class="room-info">
        <h2>Room 1</h2>
        <p>Price: $1000/month</p>
        <a href="renter_form_fillup.php"><button>Book Now</button></a>
      </div>
    </section>
    <section class="room">
      <img src="room2.jpg" alt="Room 2">
      <div class="room-info">
        <h2>Room 2</h2>
        <p>Price: $1200/month</p>
        <a href="renter_form_fillup.php"><button>Book Now</button></a>
      </div>
    <section class="room">
      <img src="room4.jpg" alt="Room 3">
      <div class="room-info">
        <h2>Room 3</h2>
        <p>Price: $1200/month</p>
        <a href="renter_form_fillup.php"><button>Book Now</button></a>
      </div>
    <section class="room">
      <img src="room5.jpg" alt="Room 5">
      <div class="room-info">
        <h2>Room 4</h2>
        <p>Price: $1200/month</p>
        <a href="renter_form_fillup.php"><button>Book Now</button></a>
      </div>
    <section class="room">
      <img src="room7.jpg" alt="Room 6">
      <div class="room-info">
        <h2>Room 5</h2>
        <p>Price: $12500/month</p>
        <a href="renter_form_fillup.php"><button>Book Now</button></a>
      </div>
    <section class="room">
      <img src="room8.jpg" alt="Room 6">
      <div class="room-info">
        <h2>Room 6</h2>
        <p>Price: $12900/month</p>
        <a href="renter_form_fillup.php"><button>Book Now</button></a>
      </div>
      
    </section>
    <!-- Add more room sections as needed -->
  </main>
  <footer>
  <?php
     include_once ('footer.php');

   
     
        ?>
  </footer>
</body>
</html>