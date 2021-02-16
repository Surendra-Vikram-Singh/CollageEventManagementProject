<?php
session_start();
include("db.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>HOME PAGE</title>
<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'font.php'; ?>
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
<!-- <nav>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="aboutus.php">AboutUs</a></li>
  <li><a href="contact.php">ContactUs</a></li>
  <li><a href="view.php">View Event</a></li>
  <li><a href="login.php">User Login</a></li>
  <li><a href="register.php">New User Register</a></li>
  <li><a href="admin.php">Admin login</a></li>
</ul>

</nav> -->
<?php include 'allnav.php'?>
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


<section style="height:300px;">
<h3 align="center" style="color:red;"><?php echo @$_GET['username'];?></h3>
<h3 align="center" style="color:red;"><?php echo @$_GET['sucess'];?></h3>
<h3 align="center" style="color:red;"><?php echo @$_GET['invalid'];?></h3>
<h2 style="padding:15px ";>Login form</h2>
<style>


input[type=email]
{
	width:50%;
	padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password]
{
	width:50%;
	padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=reset]
{
	margin-left:300px;
	background-color:red;
	
}
input[type=submit]
{
	margin-left:20px;
	background-color:green;
	
	
}
label[for=Email]
{
	margin:20px 190px;
	font-size:20px;
}
label[for=Password]
{
	margin:20px 190px;
	font-size:20px;
}
#submit{
  margin-left:40px;
  width:80px;
  /* height:20px; */
}
#reset{
  width:80px;
  /* height:20px; */
}
</style>
<form action="userlogin.php" method="POST">
    <label for="Email">User Name</label><br>
    <input type="email" id="email" name="email" placeholder="Your email.." required><br>

    <label for="Password">Password</label><br>
    <input type="password" id="password" name="pass" placeholder="Your password.." required><br>

	<input type="submit" id="submit" value="submit" name="submit" >
	<input type="reset" id="reset" value="reset" name="reset">
	</form>
	
<a style="color:blue; padding:0px 0px 0px 160px; margin-top:50px;" href="register.php">New user register here</a>





</section>
<footer>
<h2 style="text-align:center; color:white; padding-top:1px;">copyright @ 2020-21</h2>

</footer>
</div>

</body>
</html>

 