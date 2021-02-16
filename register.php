<?php
session_start();
include 'font.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>HOME PAGE</title>
<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>

<div class="container">

<header>
<h1 style="color:red; text-align:center; padding:4%"><I>WELCOME TO IICA EVENT MANAGEMENT SYSTEM<I></h1>
<!-- <img src="image/ER.PNG" class="img" alt="Girl in a jacket"> -->
</header>

<!-- <header>
<img src="image/ER.PNG" class="img" alt="Girl in a jacket">
<img src="image/logo.jpg" class="image" alt="Girl in a jacket">

</header> -->

<?php include'allnav.php';?>

<style>
* {box-sizing: border-box;}
body {font-family: 'Langar', cursive;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
/*.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;*/
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
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

<div class="slider">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="image/4.jpg" alt="khjgh" style="width:100%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="image/5.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="image/6.jpg" style="width:100%">
  
</div>



<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}

</script>
<

<section>
<form action="registration.php" method="POST" name="myform">
<table width="70%" style="margin: 0 auto; border:1px solid red; background-color:#80ffbf; border-spacing:15px";>
<style>
table,th,td{
	border:1px solid black;
	border-collapse: collapse;
	
}
#bt
{
	background-color:green;
}
#btn
{
	background-color:red;
}
</style>

<h3 align="center" style="color:red;"><?php echo @$_GET['password'];?></h3>
<tr>
<th colspan="2">REGISTRATION FORM</th>
</tr>
<tr>
<td>Email</td>
<td><input type="email" name="email" id="email" placeholder="Enter Email" size="30" required></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" name="uname" id="uname" placeholder="Enter your name" size="30" required></td>
</tr>

<tr>
<td>Department</td>
<td><input type="text" name="dname" id="dname" placeholder="Enter your department name" size="30" required></td>
</tr>

<tr>
<td>Enter Collage Name</td>
<td><input type="text" name="cname" placeholder="Enter your collage name" size="30" required></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="pass"  placeholder="Enter your password" size="30" required></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" name="cpass" placeholder="confirm password" size="30" required></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit" id="bt">
<input type="reset" name="reset" id="btn"></td>
</tr>
</table>


</section>
<footer>
<h2 style="text-align:center; color:white; padding-top:1px;">copyright @ 2020-21</h2>

</footer>
</div>
</body>
</html>

 