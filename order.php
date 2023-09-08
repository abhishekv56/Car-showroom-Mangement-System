
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
  background-image: url("images/istockphoto-1315800229-612x612.jpg");
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

td {
    padding: 13px;
}

table {
    
    text-align: center;
    padding-top: 0px;
    padding-left: 350px;
}

tr {
    color: aliceblue;
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
	  <a href="logout.php">Logout</a>
      <a href="order.php">Orders</a>
      <a href="about.php">About</a>
      <a href="contact.php">Contact</a>
      <a href="book.php">Book</a>
      <a href="brands.php">Brands</a>
	  <a href="indexlogin.php">Home</a>
    </div>
  </div>
 
  <div style="padding-top:50px"> <h1 style="text-align:center; color:white">Your Orders</h1> </div> 
  <div class="s">
       
          
                 
     <table >
           <tr>
               <th class = "text-center">ORDER ID</th>
               <th class = "text-center">CUSTOMER ID</th>
               <th class = "text-center">CAR  MODEL</th>
               <th class = "text-center">DATE-TIME-OF-BOOK</th>
                       
            </tr>
              <?php
                 $db=mysqli_connect("localhost","root","","carshowdb");
                 $cname = $_SESSION["s_name"];

                 // to get the customerid from his name  
                  $getuserid= mysqli_query($db, "SELECT cus_id from customer where name = '".$cname."'");
                  $numrows =mysqli_num_rows($getuserid);
                  if($numrows !=0)
                  {
                   while($row=mysqli_fetch_assoc($getuserid))
                       {
                         $dbuserid=$row['cus_id'];
                       }
                                   }
                     
                     //to get his orders    
                  $getorders= mysqli_query($db, "SELECT * from orders where customer_id = '".$dbuserid."'");
                 $numrows3 =mysqli_num_rows($getorders);
                  if($numrows3 !=0)
                  {
                    while($row3=mysqli_fetch_assoc($getorders))
                    {
                     $dboid=$row3['order_id'];
                     $dbcustomerid=$row3['customer_id'];
                     $carnumber =$row3['model_no'];
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

                     echo "<tr>" ;
                      echo "<td>$dboid</td>";
                        echo "<td>$dbcustomerid</td>";
                         echo "<td>$dbusercarname</td>";  
                          echo "<td>$date</td>";
                           echo" </tr>";
                                       }
                     }
                     else
                     {
                        $message = "You have no orders in your name yet ! !";
                       echo "<script type='text/javascript'>alert('$message');</script>";
                     }
                                     
                 ?>
            </table>

         </div>


</div>

</body>
</html>
