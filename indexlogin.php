
<?php
    session_start();

if(!isset($_SESSION["s_name"]))
{
    header("location: login.php");
}
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
  background-image: url("images/custlogin.webp");
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
</style>
</head>
<body>

<div class="bg-img">
  
  <div class="container">
    <div class="topnav">
	  <a href="logout.php">Logout</a>
      <a href="order.php">Orders</a>
      <a href="about.php">About</a>
      <a href="contact.php">Contact</a>
      <a href="book.php">Book</a>
      <a href="brands.php">Brands</a>
	  <a href="indexlogin.php">Home</a>
    </div>
  </div>
  <h1 style="text-align:center;">Welcome to your account <?=$_SESSION['s_name'];?>!!</h1>

</div>

</body>
</html>
