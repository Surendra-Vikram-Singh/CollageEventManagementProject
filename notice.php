<!DOCTYPE html>
session_start();
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HOME PAGE</title>
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
</head>
<body>




<div class="container">

<header>
<h1 style="color:red; text-align:center; padding-top:50px;"><I>WELCOME TO IICA EVENT MANAGEMENT SYSTEM<I></h1>
<!-- <img src="image/ER.PNG" class="img" alt="Girl in a jacket"> -->
</header>

<!-- <header>
<img src="image/ER.PNG" class="img" alt="Girl in a jacket">
<img src="image/logo.jpg" class="image" alt="Girl in a jacket">
</header> -->
<nav>
<?php include 'adminnav.php'; ?>

</nav>

<style>
* {box-sizing: border-box;}
body { font-family: 'Langar', cursive;}
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

table{
  margin:auto;
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



<div style="text-align:right">
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

<section>
<!-- <img src="image/College-Events.jpg" class="a" alt="Girl in a jacket" > -->
<br>
<br>
<form action="uploadfile.php" method="post" enctype="multipart/form-data" >
  <table>
  <tr><td>
  <h2>Select Notice to upload:</h2>
  </td>
  </tr>
  <tr>
  <td>
 <input type="file" name="fileToUpload" id="fileToUpload">
  </td>
  </tr>
  <tr>
  <td>
  <input type="submit" value="Upload Image" name="submit">
  </td></tr>
  </table>
</form>
</section>

<footer>
<h2 style="text-align:center;color:white;padding-top:20px;">copyright @ 2020-21</h2>

</footer>
</div>

</body>
</html>

 