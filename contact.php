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
    <h3>                            
      <h1 style="text-align: center;">Contact Us</h1><br><br>
        
    </h3>
    <div style="padding-left:500px"><img src="images/finallogo2.png" alt="logo"></div>
   
  </div>
  


 
   
 
  
      <div style="padding-left:450px;"> 
       <h2> 
       <pre>Phone:      6361015536 / 6362220352</pre>
       <pre>Telephone:  080-245-4658</pre>
       <pre>Email:      AGautomobiles@gmail.com</pre>
       <pre>Website:    www.AGautomobiles.com</pre>
       <pre>address:    Near Maharaja Institute Of Technology
            1st block 3rd cross Srirangapattana
            Mandya - 5700158</pre>
       </h2>
     </div>

   <h1 style="text-align:center">Follow Us On</h1>>
     <div class="row">
      <div class="column">
        <img src="images/fb.png" alt="fb" style="width:85%" ><h2 style="color:rgb(0, 0, 0);"><b>_AGAutomobiles_530_</b></h2>
      </div>
      <div class="column">
        <img src="images/insta.png" alt="insta" style="width:85%; height: 250px "> <h2 style="color:rgb(0, 0, 0);"><b>_A_G_automobiles_530</b></h2>
      </div>
      <div class="column">
        <img src="images1/twitter.png" alt="twit" style="width:85% ; height: 250px;">  <h2 style="color:rgb(0, 0, 0);"><b>AGcars530</b></h2>
      </div>
     
    </div>

  
</div>

</body>
</html>
