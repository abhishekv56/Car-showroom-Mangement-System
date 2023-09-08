<?php
session_start();

if(isset($_POST["login"])){

if(!empty($_POST['email']) && !empty($_POST['pass'])) {
    
	$useremail=$_POST['email'];
	$pass=$_POST['pass'];
    $db = mysqli_connect("localhost","root","","carshowdb");
    
	$query=mysqli_query($db,"SELECT * FROM customer WHERE email= '".$useremail."' AND password='".$pass."'");
    
   	$numrows=mysqli_num_rows($query);
    
	if($numrows!=0)
	{
        while($row=mysqli_fetch_assoc($query))
        {
            $dbuseremail=$row['email'];
            $dbpass=$row['password'];
            $dbusername=$row['name'];    
	    }

        
        if($useremail == $dbuseremail && $pass == $dbpass)
        {

            $_SESSION['s_name']= $dbusername;

            $message = "Login Successful!";
             echo "<script type='text/javascript'>alert('$message');</script>";
            /* Redirect browser */
            header("Location: indexlogin.php");
        }
	} 
    else 
    {
	   $message = "Invalid credentials !";
        echo "<script type='text/javascript'>alert('$message');</script>";
	}

} 
    else {
	echo "All fields are required!";
        }
}
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
  

  body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

body {
    padding: 0;
    margin: 0;
}

.bg-img {
  /* The image used */
  background-image: url("images/r-3.jpg");

  /* Control the height of the image */
  min-height: 750px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: ;
  right: 0;
  margin: 250px;
  max-width:
   padding: 16px;
  background-color: repeat-x;
}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: repeat-x;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: rgb(0,0,0,0.5);
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
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
        <a href="signup.php">Sign Up	</a>
          <a href="login.php">Login</a>
          <a href="about.php">About</a>
          <a href="contact.php">Contact</a>
          <a href="brands.php">Brands</a>
        <a href="index.php">Home</a>
        </div>
        <form action="" class="container" method="POST">
          <h1>Login</h1>
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="pass" required>
      
          <button type="submit" class="btn" name="login">Login</button>
        </form>
      </div>
    
</body>
</html>