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
    padding: 50px;
    text-align: center;
}

tbody {
    display: table;
    padding-left: 270px;
}

tr {
    
    text-align: center;
}
td {
    padding: 10px;
}

th.text-center {
    padding: 20px;
}

</style>
</head>
<body>

<div class="bg-img">
  <div class="container">
    <div class="topnav">
	  
      <a href="adminlogout.php">Logout</a>
      <a href="adminorder.php">Orders</a>
      <a href="adminaddcars.php">Add-Cars</a>
      <a href="admincar.php">Cars </a>
	  <a href="admin.php">Home</a>
    </div>
  </div>
<h1>The Order Summary</h1>

<div class="s">
                 
                 
                 <table >
       
                   <tr>
                       <th class = "text-center">ORDER NUMBER</th>
                       <th class = "text-center">CUSTOMER ID</th>
                       <th class = "text-center">CUSTOMER NAME</th>
                       <th class = "text-center">CAR MODEL</th>
                       <th class = "text-center">DATE OF ORDER</th>
                      </tr>
                             <?php
                                   $db=mysqli_connect("localhost","root","","carshowdb");
                                   
                                   //to the  orders    
                                   $getorders= mysqli_query($db, "SELECT * from orders ");
                                   $numrows3 =mysqli_num_rows($getorders);
                                   if($numrows3 !=0)
                                   {
                                       while($row3=mysqli_fetch_assoc($getorders))
                                       {
                                                       $dbsaleid=$row3['order_id'];
                                                       $dbcustomerid=$row3['customer_id'];
                                                       $carnumber=$row3['model_no'];
                                                       $date=$row3['order_date'];
                                       
                                                   

                                                   // get his car model name

                                               $getusercarname = mysqli_query($db, "SELECT model_name from model where model_no = '".$carnumber."'");
                                               $numrows2 =mysqli_num_rows($getusercarname);
                                               if($numrows2 !=0)
                                               {
                                                   while($row2=mysqli_fetch_assoc($getusercarname))
                                                   {
                                                       $dbusercarname=$row2['model_name'];
                                                   }
                                               }
                                                 
                                                  // to get the customer  name 
                                               $getusername= mysqli_query($db, "SELECT name from customer where cus_id = '".$dbcustomerid."'");
                                               $numrows =mysqli_num_rows($getusername);
                                               if($numrows !=0)
                                               {
                                                   while($row=mysqli_fetch_assoc($getusername))
                                                   {
                                                       $dbusername=$row['name'];
                                                   }
                                               }
                                                           echo "<tr>" ;
                                                           echo "<td>$dbsaleid</td>";
                                                          echo "<td>$dbcustomerid</td>";
                                                          echo "<td>$dbusername</td>";
                                                           echo "<td>$dbusercarname</td>";
                                                            echo "<td>$date</td>";
                                                           echo" </tr>";
                                       }
                                   }
                                     
                           ?>
                  </table>

         </div>

</div>

</body>
</html>
