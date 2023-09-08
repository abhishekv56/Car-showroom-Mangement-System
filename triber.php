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
   <h1 style="color: aqua;">Renault Triber {INR 6.00 - 8.63 Lakh*}</h1>
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
  <img src="images1/triber.webp" style="width: 100%;">
  <div class="text">Good look </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="images1/triber2.jpg" style="width: 100%;">
  <div class="text">Better engine</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="images1/triberin.jpg" style="width: 100%;">
  <div class="text">Good Interior</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="images1/triber3.jpg" style="width: 100%;">
    <div class="text">Classic </div>
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
  <h6>The Renault Triber is a mini MPV[1][2][3] with three-row seating produced by the French car manufacturer Renault through its Indian subsidiary Renault India. It was introduced in India on 19 June 2019 and went on sale in August 2019.[4][5]Developed under the body code "RBC", the Triber is built on top of the CMF-A platform like the Kwid. Despite that, the car is built with over 90% dedicated parts not shared with other Renault and Nissan vehicles since it is a larger and wider car in the CMF-A family.[6]

Laurens van den Acker, Corporate Design of Groupe Renault said the interior of the car is a "miracle" and refers to it as "a bit of a Leonardo da Vinci" as it offers three-row seating in a sub-four metre length.[7] This was achieved by making the bonnet and engine bay as short as possible, making it not possible to fit a diesel engine or any larger petrol engine to the car. The car's width is spanning at 1,739 mm (68.5 in) to maximize cabin space, especially in the second row where three people had to fit comfortably. The stretched wheelbase and the reduced overhang also contributed to the spacious cabin space which Van den Acker claimed is around 3 metres long. The second row seats comes with a reclining and split folding function. There is a dedicated AC vent for the third row of seats, armrests and charging sockets. The third row can be removed altogether to liberate up to 625 L (38,140 cu in) of boot space.[8]</h6>
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
      <td>Mileage:20.0_kmpl</td>
      <td>Engine:999cc </td>
      <td>Transmission: Automatic</td>
      <td>ABS: Yes</td>
    </tr>
    <tr>
      <td>Fuel Type : Petrol </td>
      <td>BHP: 71.01</td>
      <td>Rear Ac vents: Yes</td>
      <td>Drivar Airbag: Yes</td>
     
    </tr>
    <tr>
      <td>Service Cost: 3000Rs/yr</td>
      <td>No. of Cylinders:3</td>
      <td>Seating Capacity: 7</td>
      <td>Parking Sensor: Yes</td>
    </tr>
  
    <tr>
      <td>Fuel Tank: 40L</td>
      <td>No. of Transmissions: 5</td>
      <td>Bootspace: 250L</td>
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
