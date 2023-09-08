<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

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
</head>
<body>


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



</body>
</html>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* Add a black background color to the top navigation */
.topnav2 {
  background-image:url(images/istockphoto-185005145-170667a.jpg);
  overflow: hidden;
  
}


 

</style>
</head>
<body>


  <div class="topnav2">
   <h1 style="color: aqua;">The BMW-7series {INR 1.65 - 1.70 Cr*}</h1>
    </div>



</body>
</html>







<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

   
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

body {
    padding: 0;
    margin: 0;
}

* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0; padding-top: 0px; padding-left: 0px; float: left;}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 656px;
  position: relative;
  margin: auto;
  display: flex;
  
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #4261e9;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}



table {
  border-collapse:collapse;
  border-spacing: 0;
  width: 90%;
  border: 1px solid rgb(22, 2, 2);
}

th, td {
  text-align: left;
  padding: 10px;
}

tr:nth-child(even) {
  background-color: #abdce9;
}

h3 {
    color: black;
    text-align:center;
    
}
h3:hover {
    color: red;
}


</style>
</head>
<body>

 <div class="bg-img">

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="images/7series1.jpg" style="width: 100%;">
  <div class="text">Classic</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="images/7series_2.jpg" style="width: 100%;">
  <div class="text">Best performance</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="images/7series_3.jpg" style="width: 100%;">
  <div class="text">Cool Interior</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="images/7series_4.jpg" style="width: 100%;">
    <div class="text">Better speed</div>
  </div>


<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)" width="100px">❯</a>

</div>
<br>



 <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
</div>
<br><div class="header">
  <h6>The BMW 7 Series is a full-size luxury sedan manufactured and marketed by the German automaker BMW since 1977.[1] It is the successor to the BMW E3 "New Six" sedan and is now in its seventh generation.

The 7 Series is BMW's flagship car and is only available in a sedan bodystyle (including long wheelbase and limousine models). It traditionally introduces technologies and exterior design themes before other models in BMW's lineup.[2]

The first generation of the 7 Series was powered by straight-6 petrol engines, and following generations have been powered by inline-4, straight-6, V8 and V12 engines with both natural aspiration and turbocharging. Since 1995, diesel engines have been optional in the 7 Series.

Unlike the 3 Series and 5 Series sedans, BMW has offered a nonpureblood M variant, the BMW M760 6.6L V12 (at the time the most powerful BMW ever made, not to be confused with BMW 760 6.6 V12 which does not offer the same performance). The Alpina B7 (G12) serves as one of the high-performance variants of the 7 Series.The E23 is the first generation 7 Series and was produced from 1977 to 1987. It was built in a 4-door sedan body style with 6-cylinder engines, to replace the E3 sedans. From 1983 to 1987, a turbocharged 6-cylinder engine was available.

The E23 introduced many electronic features for the first time in a BMW, including an onboard computer, a service interval indicator, a "check control panel" (warning lights to indicate system faults to the driver), a dictaphone, and complex climate control systems. It was also the first BMW to offer an anti-lock braking system (ABS), a driver's airbag, and double-link front suspension.</h6>
</div><br>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}


</script>



<div class="table" style="width: 115%;">
  <table>
    <tr>
      <th>Economy</th>
      <th>Performance</th>
      <th>Comfort</th>
      <th>Safety</th>
   </tr>
    <tr>
      <td>Mileage:12.55_kmpl</td>
      <td>Engine:2998cc </td>
      <td>Transmission:Automatic </td>
      <td>ABS: Yes</td>
    </tr>
    <tr>
      <td>Fuel Type : Petrol </td>
      <td>BHP: 375.48</td>
      <td>Rear Ac vents: Yes</td>
      <td>Drivar Airbag: Yes</td>
     
    </tr>
    <tr>
      <td>Service Cost:65000 Rs/yr</td>
      <td>No. of Cylinders:6</td>
      <td>Seating Capacity: 5</td>
      <td>Parking Sensor: Yes</td>
    </tr>
  
    <tr>
      <td>Fuel Tank: L</td>
      <td>No. of Transmissions:8 </td>
      <td>Bootspace: 550L</td>
      <td>4-Airbags: Yes </td>
      
    </tr>
  
  </table>
</div>
  
<?php
    if(isset($_SESSION['s_name']))
      {
       echo '<a href="book.php"><h3>BOOK THE CAR!</h3> </a>';
        }
    else
     {
       echo '<a href="login.php"><h3>BOOK THE CAR!</h3> </a>';  
        }
   ?>

</div>

</body>

</html> 
