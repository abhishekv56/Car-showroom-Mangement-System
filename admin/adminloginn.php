<?php
session_start();

if(isset($_POST["login"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
    
	$user=$_POST['user'];
	$pass=$_POST['pass'];
    
    $db = mysqli_connect("localhost","root","","carshowdb");
    
	$query=mysqli_query($db,"SELECT * FROM admin WHERE admin_name='$user' AND admin_password='$pass'");
    
   	$numrows = mysqli_num_rows($query);
    
	if($numrows !=0)
	{
        while($row=mysqli_fetch_assoc($query))
        {
            $dbusername=$row['admin_name'];
            $dbpass=$row['admin_password'];
               
	    }

        
        if($user == $dbusername && $pass == $dbpass)
        {
            
             $_SESSION['admin_name']= $dbusername;

            /* Redirect browser */
            header("Location: admin.php");
           
        }
	} 
    else 
    {
        ?>
        <script>
          alert("Invalid login credentials!!..Please check password & Username");
        </script>
    
      <?php
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
    <style>
      
      body {
    padding: 0;
    margin: 0;
}


.bg-img {
  /* The image used */
  background-image: url("images/194-1941353_high-quality-front-view-car-wallpaper-hd-1080p.jpg");
  margin: 0%;
  padding: 10%;
  min-height: 500px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  /* Needed to position the navbar */
  position: relative;
}


img{
    padding: 0px;
    margin: 0px;
    height: 150px;
    padding-left: 450px;
}


    </style>

</head>

<body>


<div class="bg-img">

<div>
<img src="images/logo56.png" alt="logo">
</div>

<div style="text-align: center;">
  <h1 style="text-align: center; color: rgba(255, 0, 0, 0.979);"><u>Hello..! <b> ADMINISTRATOR<b></u></h1>
	
  <h3 style="color: aquamarine;">please use your login credentials to login</h3>
  
 <div >
<form class="text-center" action="adminloginn.php" method="post" >            
    <div ><br/>
       <label style="color: red;">USERNAME</label>
<input type="text" size="50" placeholder="Enter your username" name="user" required >
     </div>

    <div ><br/>
       <label style="color: red;">PASSWORD</label>
<input type="password"  size="55" placeholder="Enter your password" name="pass" required>
     </div> 
    <div><br/>
        <button type="submit" class="btn btn-primary" value="login" name="login">Login</button>
     </div>
 </form>     
</div>
</div>   

</body>
</html>
