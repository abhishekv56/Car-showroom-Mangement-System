<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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

.row {
  display: flex;

}

.column {
  flex: 33.33%;
  padding: 20px;
}

h2{ 
   padding: 0%;
   margin: 0%;
   text-align: center;
   
  
  }

/* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
  
}

/* Style the links inside the navigation bar */
.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
 



</style>
<body>
    <div class="bg-img">
    
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

    <div class="row">
        <div class="column">
          <img src="images/bmw.jpg" alt="BMW" style="width:100%" ><h2 style="color:rgb(0, 0, 0);"><b><a href="BMWcars.php" style="color: rgb(0, 0, 0);">BMW</a></b></h2>>
        </div>
        <div class="column">
          <img src="images/mblogo.jpg" alt="mercedes" style="width:100%; height: 250px "> <h2 style="color:rgb(0, 0, 0);"><b><a href="MBcars.php" style="color: rgb(0, 0, 0);">Mercedes-Benz</a></b></h2>
        </div>
        <div class="column">
          <img src="images/audi.jpg" alt="Audi" style="width:100% ; height: 250px;">  <h2 style="color:rgb(0, 0, 0);"><b><a href="Audicars.php" style="color: rgb(0, 0, 0);">Audi</a></b></h2>
        </div>
      </div>

      <br>
      <br>
      <br>
      <div class="row">
        <div class="column">
          <img src="images/mahindra-scorpio-2022-e1651909268341.jpg" alt="mahindra" style="width:100%">  <h2 style="color:rgb(0, 0, 0);"><b><a href="Mahindracars.php" style="color: rgb(0, 0, 0);">Mahindra</a></b></h2>
        </div>
        <div class="column">
          <img src="images/kialogo.jpg" alt="kia" style="width:100% ; height : 278px" >  <h2 style="color:rgb(0, 0, 0)"><b><a href="Kiacars.php" style="color: rgb(0, 0, 0);">KIA</a></b></h2>
        </div>
        <div class="column">
          <img src="images/renault-reuters-1102907-1650612305.jpg" alt="Reanult" style="width:100%; height: 275px">  <h2 style="color:rgb(0, 0, 0);"><b><a href="Renaultcars.php" style="color: rgb(0, 0, 0);">Renault</b></a></h2>
        </div>
      </div>
    </div> 


     
</body>
</html>


