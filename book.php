<?php

session_start();
if(!isset($_SESSION["s_name"]))
{
    header("location: login.php");
}


$db=mysqli_connect("localhost","root","","carshowdb");

// REGISTER USER
if(isset($_POST['book'])) 
{   // receive all input values from the form
    $cmodel = $_POST['model_no'];   
     $user = $_SESSION["s_name"];

   $getmodelno= mysqli_query($db, "SELECT model_no from model where model_name = '".$cmodel."'");
    $numrows1 =mysqli_num_rows($getmodelno);
	if($numrows1 !=0)
	{
        while($row1=mysqli_fetch_assoc($getmodelno))
        {
            $dbmodelno=$row1['model_no'];         
	    }
    }
    
    $checkcar= mysqli_query($db, "SELECT * from cars where model_no = '".$dbmodelno."'");
    $numrows3 =mysqli_num_rows($checkcar);
   
    if($numrows3 !=0)
    {
              $getuserid= mysqli_query($db, "SELECT cus_id from customer where name = '".$user."'");
                $numrows2 =mysqli_num_rows($getuserid);
                if($numrows2 !=0)
                {
                    while($row2=mysqli_fetch_assoc($getuserid))
                    {
                        $dbuserid=$row2['cus_id'];
                    }
                }
                 $carupdate = " DELETE from cars where model_no = '".$dbmodelno."' LIMIT 1 ";
                mysqli_query($db, $carupdate);
                $orderupdate = " INSERT into orders (customer_id,model_no) VALUES ('$dbuserid', '$dbmodelno')";
                mysqli_query($db, $orderupdate);
            $message = "Booking succesfull! Visit and Contact The Showroom Once For further Transactions ";
         echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else
    {
       $message = "Oops ! the car you searching for is currently not available ! ";
         echo "<script type='text/javascript'>alert('$message');</script>";
    }	
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
  background-image: url("images1/tyler-clemmensen-4gSavS9pe1s-unsplash.jpg");
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

form {
    padding-top: 160px;
}
</style>
</head>
<body>

<div class="bg-img">
  <div class="container">
    <div class="topnav">
	  <a href="index.php">Logout</a>
      <a href="order.php">Orders</a>
      <a href="about.php">About</a>
      <a href="booking.php">Book</a>
      <a href="brands.php">Brands</a>
	  <a href="indexlogin.php">Home</a>
    </div>
  </div>


<div style="text-align:center; margin:0px padding:0px">
<form  action="book.php" method="post" >
                    
                    <div>
                        <label>Select Your Car Model</label><br>
                        <select name = "model_no" style="width:566px; height: 40px;" >
                         <option value = "">|--select car--|</option >
                         <option value = ""> </option>
                         
                         
                 <option value = "BMW3series">BMW 3 Series</option>
                 <option value = "BMWX3"> BMW X3 </option>
                 <option value = "BMWi4"> BMW I4 </option>
                 <option value = "BMW7series"> BMW 7 Series </option>
                 
                 
                 <option value = ""> </option>
                 
                 <option value = "Mercedes_C_Class">Mercedes_C_Class </option>
                 <option value = "Mercedes_GLA">Mercedes_GLA </option>
                 <option value = "Mercedes_E_Class">Mercedes_E_Class </option>
                 <option value = "Mercedes_S_Class">Mercedes_S_Class</option>
                
                 
                 <option value = ""> </option>
                 
                 <option value = "Audi_A6">Audi_A6</option>
                 <option value = "Audi_A8_L"> Audi_A8_L </option>
                 <option value = "Audi_Etron_GT">Audi_Etron_GT</option>
                 <option value = "Audi_S5_Sportback">Audi_S5_Sportback </option>
                
                 
                 <option value = ""> </option>
                 
                 <option value = "XUV700"> XUV 700</option>
                 <option value = "Scorpio_S11">Scorpio S11</option>
                 <option value = "Thar"> Mahindra Thar</option>
                 <option value = "XUV500"> XUV 500 </option>
                 
                         
                 <option value = ""> </option>
                 
                 <option value = "Kiger"> Renault Kiger </option>
                 <option value = "Triber">Renault Triber</option>
                 <option value = "Duster"> Renault Duster</option>
                
                			
                 <option value = ""> </option>
                 
                 <option value = "Kia_Seltos">  KIA Seltos </option>
                 <option value = "Kia_Carnival"> KIA Carnival</option>
                 <option value = "Kia_Carens">  KIA Carens</option>
                 <option value = "Kia_Sonet">  KIA Sonet </option>
                
               </select>
                      </div>
                      <div><br>
                <button type="submit" name="book" class="btn btn-warning" value="book">Book the car</button>
             </div>
             
         </form>     
</div>  
</div>


</body>
</html>
