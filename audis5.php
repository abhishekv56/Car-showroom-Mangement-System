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
   <h1 style="color: aqua;">The Audi S5 Sportback{INR 70.99 - 73.99 Lakh*}</h1>
    </div>



</body>
</html>







<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

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
  width: 87%;
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
  <img src="images/audis51.jpg" style="width: 100%;">
  <div class="text">Better Engine</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="images/audis52.jpeg" style="width: 100%;">
  <div class="text">Nice Features</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="images/audis5in.jpg" style="width: 100%;">
  <div class="text">Cool interior</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="images/audis53.jpeg" style="width: 100%;">
    <div class="text">Better Speed</div>
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
  <h6>The Audi S5 was released in coupé form to the public at the same time as the A5. The Audi S5 Sportback was unveiled at the 2009 Frankfurt Motor Show, and went on sale in the spring of 2010 with a MSRP of €57,900.[2][3]

The Audi S5, in comparison to the A5, features a more aggressive body style (typical design for Audi S and RS models) which consists of side skirts, bigger air inlets on the front bumper and a dual-quad tip exhaust. The S5 includes a string of LED daytime running lights around the bi-Xenon headlamps and a vertically striped chrome grille. In many markets, the S5 includes as standard 19" alloy wheels with a five-parallel spoke design, larger brakes, heated leather sport bucket seats, and other convenience features, some of which are available only as an option on the A5. Changes for 2010 model year included LED tail lamps, the introduction of Premium Plus and Prestige trim levels and new optional equipment such as leather/Alcantara seats.

Despite sharing the same nameplate, the powertrains were different between the coupé and the Cabriolet/Sportback for the 2010–2012 model years. The 2007–2012 Audi S5 coupé had a 4.2-litre Fuel Stratified Injection (FSI) V8 engine[4] that produced 260 kW (350 hp), while the S5 Cabriolet and Sportback have a supercharged 3.0-litre TFSI V6 engine producing 245 kW (329 hp) which was shared with the 2010 Audi S4 3.0 TFSI quattro sedan and avant. The coupé had a choice of either a 6-speed manual or 6-speed Tiptronic, while the Cabriolet/Sportback have the 7-speed S-tronic dual-clutch transmission.[5] Despite minor differences in peak power output, both the V8 and the supercharged V6 provide very similar performance.</h6>
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
      <td>Mileage:10.02_kmpl</td>
      <td>Engine:2994 </td>
      <td>Transmission:Automatic </td>
      <td>ABS: Yes</td>
    </tr>
    <tr>
      <td>Fuel Type : Petrol </td>
      <td>BHP:348.66 </td>
      <td>Rear Ac vents: Yes</td>
      <td>Drivar Airbag: Yes</td>
     
    </tr>
    <tr>
      <td>Service Cost: 55000Rs/yr</td>
      <td>No. of Cylinders:6</td>
      <td>Seating Capacity: 5</td>
      <td>Parking Sensor: Yes</td>
    </tr>
  
    <tr>
      <td>Fuel Tank:58 L</td>
      <td>No. of Transmissions: 7</td>
      <td>Bootspace: 465L</td>
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
