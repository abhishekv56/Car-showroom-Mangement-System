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
    padding: 45px;
    text-align: center;
}
tbody {
    display: table;
    padding-left: 465px;
}

tr {
    text-align: center;
}
td {
    padding: 10px;
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
<h1>Available cars in the Showroom</h1>


<div class="s">
                 
                 
     <table class="table table-bordered table-responsive table-striped table-hover table-condensed text-center " >
       
                   <tr>
                       <th class = "text-center">CAR MODEL NO</th>
                       <th class = "text-center">CAR NAME</th>
                       <th class = "text-center">NO. AVAILABLE</th>   
                    </tr>
                             <?php
                                $db=mysqli_connect("localhost","root","","carshowdb");
           
                                   //to get his orders     
                                   $getcars= mysqli_query($db, "SELECT * from model");
                                   $numrows3 =mysqli_num_rows($getcars);
                                   if($numrows3 !=0)
                                   {
                                       while($row3=mysqli_fetch_assoc($getcars))
                                       {
                                                       $dbmodelno=$row3['model_no'];
                                                        $dbmodelname=$row3['model_name'];
                                                       
                                                   // get his car model name
                                               $getcarnumbers = mysqli_query($db, "SELECT * from cars where model_no = '".$dbmodelno."'");
                                               $numrows2 =mysqli_num_rows($getcarnumbers);

                                                           echo "<tr>" ;
                                                           echo "<td>$dbmodelno</td>";
                                                          echo "<td>$dbmodelname</td>";
                                                          echo "<td> $numrows2</td>";  
                                                           echo" </tr>";
                                       }
                                   }
                                     
                           ?>
                  </table>

         </div>
         

</div>

</body>
</html>
