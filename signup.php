<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    
    
    
    
    
    
    
    
    
    
    
    * {box-sizing: border-box}

        /* Full-width input fields */
          input[type=text], input[type=password] {
          width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          display: inline-block;
          border: none;
          background: repeat-x;
        }
        
        input[type=text]:focus, input[type=password]:focus {
          background-color: #ddd;
          outline: none;
        }
        
        hr {
          border: 1px solid #58bdec;
          margin-bottom: 25px;
        }
        
        /* Set a style for all buttons */
        button {
          background-color: rgb(0,0,0,0.5);
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
          opacity: 0.9;
        }
        
        button:hover {
          opacity:1;
        }
        
        /* Extra styles for the cancel button */
        .cancelbtn {
          padding: 14px 20px;
          background-color: rgb(0,0,0,0.5);
        }
        
        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn, .signupbtn {
          float: left;
          width: 50%;
        }
        
        /* Add padding to container elements */
        .container {
          padding: 166px;
        }
        
        /* Clear floats */
        .clearfix::after {
          content: "";
          clear: both;
          display: table;
        }
        
        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {
          .cancelbtn, .signupbtn {
            width: 100%;
          }
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
        
        
b {
    color: mediumspringgreen;
}
        
 </style>

<?php

include 'dbconec.php';

 if(isset($_POST['submit'])){
   
  
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $address = mysqli_real_escape_string($con, $_POST['address']);
 


 $insertq = "insert into customer(name, email, password, phone, address) values('$name','$email','$password','$phone','$address')";
 
 $iq = mysqli_query($con, $insertq);
 
 
if($insertq){
  ?>
    <script>
      alert("Registered  succesfully.. Book your car NOW!!..");
    </script>

  <?php
}
else{
  ?>
  <script>
    alert(" no connection ");
  </script>

<?php
}

 }

?>

</head>
<body>
   
    <div class="bg-img">

      <div class="topnav">
        <a href="signup.php">Sign Up	</a>
          <a href="login.php">Login</a>
          <a href="about.php">About</a>
          <a href="contact.php">Contact</a>
          <a href="brands.php">Brands</a>
        <a href="index.php">Home</a>
        </div>
   
    <form action="" style="border:1px solid #ccc" method="POST">
        <div class="container">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          
           
          <label for="name"><b>Name</b></label>
          <input type="text" placeholder="Enter your name" name="name" required>
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
      
          <label for="phone"><b>Phone</b></label>
          <input type="text" placeholder="Enter phone no" name="phone" required>


          <label for="address"><b>Address</b></label>
          <input type="text" placeholder="Enter address" name="address" required>
      
          
      
          
      
          <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn" name="submit">Sign Up</button>
          </div>
        </div>
    </div> 
      </form>
      
</body>
</html>