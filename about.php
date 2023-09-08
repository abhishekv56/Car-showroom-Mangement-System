<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif}
* {box-sizing: border-box;}

body {
    padding: 0;
    margin: 0;
}


.bg-img {
  /* The image used */
  background-image: url("images/backgr.jfif");
  margin: 0%;
  padding: 0%;
  min-height: 800px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  /* Needed to position the navbar */
  position: relative;
}

/* Position the navbar container inside the image */
.container {
  width: auto;
}

/* The navbar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Navbar links */
.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: right;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.column {
  float: left;
  width: 33.33%;
  padding: 60px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: block;
}



</style>
</head>
<body>

<div class="bg-img">
  <div class="container">
    <div class="topnav">
      <?php
      if(isset($_SESSION['s_name']))
          {
           
            echo '<a href="logout.php">Logout</a>' ;
            echo ' <a href="order.php">Orders</a>' ;
            echo ' <a href="about.php">About</a>' ;
            echo '<a href="contact.php">Contact</a>';
            echo ' <a href="book.php">Book</a>';
            echo '<a href="brands.php">Brands</a>' ;
            echo '<a href="indexlogin.php">Home</a>' ;
            }
      else
         {
        
          echo ' <a href="signup.php">Sign Up	</a>';
          echo ' <a href="login.php">Login</a>';
          echo '<a href="about.php">About</a>';
          echo '<a href="contact.php">Contact</a>';
          echo ' <a href="brands.php">Brands</a>';
          echo ' <a href="index.php">Home</a>';
          
         }

 ?>

    </div>
    <div style="padding-left:500px"><img src="images/finallogo2.png" alt="logo"></div>
   
  </div>
  <div class="row">
    <div class="column">
      <img src="images1/carshow1.jfif" alt="BMW" style="width:115%" >
    </div>
    <div class="column">
      <img src="images1/carshow2.jpg" alt="mercedes" style="width:115%"> 
    </div>
    <div class="column">
      <img src="images1/carshow3.webp" alt="Audi" style="width:115%">  
    </div>
  </div>


  <div class="row">
    <div class="column">
      <img src="images1/carshow4.webp" alt="mahindra" style="width:115%"> 
    </div>
    <div class="column">
      <img src="images1/carshow5.webp" alt="kia" style="width:115%"> 
    </div>
    <div class="column">
      <img src="images1/carshow6.jpg" alt="Reanult" style="width:115%">
    </div>
  
    </div>  
        <h3>                            
          <h1 style="text-align: center;">About Us</h1>
      At AG Automobiles, we believe that our relationship does'nt end with getting you a new car. Its just the beginning of a long relationship which will need constant support and quality experience. AG Automobiles is Mysore's largest  car dealership serving customers throughout city from its 18 locations, providing a comfortable and a superior experience. 
  
  AG Automobiles has been recognized on a national level through the 10 platinum awards in last 15 years. Only dealership in Karnataka to achieve this feat. 
  
  Run by a dedicated team of professionals, highly competent with profound industry knowledge, backed with 300 strong MSIL trained technicians, 140 Bronze masters, 110 service advisors/consultants, 75 technical advisors, we offer professional services and optimum customer satisfaction to over 15,000 customers every month.
  
  We invite you to experience the truly integrated car buying service AG Automobiles has to offer through the largest car network in Mysuru.
        </h3>

</div>

</body>
</html>
