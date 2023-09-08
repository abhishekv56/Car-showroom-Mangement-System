
<?php
    session_start();
if(!isset($_SESSION["admin_name"]))
{
    header("location: adminloginn.php");
}

?>





<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    padding: 0;
    margin: 0;
}

body {font-family: Arial, Helvetica, sans-serif}
* {box-sizing: border-box;}

.bg-img {
  /* The image used */
  background-image: url("images/194-1941353_high-quality-front-view-car-wallpaper-hd-1080p.jpg");
  margin: 0%;
  padding: 0%;
  min-height: 700px;

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

h1 {
    padding: 150px;
    text-align: center;
}
</style>
</head>
<body>

<div class="bg-img">
  <div class="container">
    <div class="topnav">
	  
      <a href="adminlogout.php">Logout</a>
      <a href="orders">Orders</a>
      <a href="adminaddcars.php">Add-Cars</a>
      <a href="admincar.php">Cars </a>
	  <a href="admin.php">Home</a>
    </div>
  </div>
<h1>Welcome ADMINISTRATOR</h1>

</div>

</body>
</html>
