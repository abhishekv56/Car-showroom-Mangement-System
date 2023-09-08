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
  background-image: url("images/photo-1493238792000-8113da705763.jfif");
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
      <a href="adminorder.php">Orders</a>
      <a href="adminaddcars.php">Add-Cars</a>
      <a href="admincar.php">Cars </a>
	  <a href="admin.php">Home</a>
    </div>
  </div>

 
<h1><b>Add Cars<b></h1>
  
<form class="text-center"  action="adminaddcars.php" method="post" style="text-align:center;">
                    
                    <div>
                       <label>Select Your Car Model</label><br>
                        
                       <select name = "model_no" style="width:566px; height: 40px;" >
                         <option value = "">|--select car--|</option>
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
                      
             
                      
                      
                     <div><br/>
                        <label>Chasis Number</label><br>
               <input type="number" class="form-control transparent-input"  placeholder="chasis" name="chasis">
                      </div>
                      
                      
                     <div><br/>
                        <label>Color</label>
               <input type="text" class="form-control transparent-input" size="50" placeholder="color" name="color">
                      </div>
          
          
                     <div method="POST"><br/>
                         <button type="submit" name="add" class="btn btn-warning" value="add" >Add car</button>
                      </div>
                  </form>     

</body>
</html>






<?php 

$db=mysqli_connect("localhost","root","","carshowdb");



// if($db){
//      ?>
        <script>
//          alert("connection succesful");
//        </script>

     <?php
//  }
//  else{
//      ?>
      <script>
//        alert(" no connection ");
//      </script>

    <?php
//  }

// REGISTER USER
if(isset($_POST['add'])) 
{
    
    $cmodel = mysqli_real_escape_string($db, $_POST['model_no']);	// receive all input values from the form
    $chasis = mysqli_real_escape_string($db, $_POST['chasis']);    
	$color = mysqli_real_escape_string($db, $_POST['color']);
    
    
    $getmodelno= mysqli_query($db, "SELECT model_no from model where model_name = '".$cmodel."'");
               
           
                $numrows =mysqli_num_rows($getmodelno);
                if($numrows !=0)
                {
                    while($row=mysqli_fetch_assoc($getmodelno))
                    {
                        $dbmodelno= $row['model_no'];

                    }
                }
    
	
	
		
    
        $query2 = "INSERT into cars values ('$chasis','$dbmodelno','$color')";
        
		mysqli_query($db, $query2);

     
if($query2){
  ?>
    <script>
      alert("Car was added !!..");
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


        
	