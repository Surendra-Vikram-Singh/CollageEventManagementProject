<?php
session_start();
include("db.php");
$em=$_SESSION['email'];
if($em==true)
{
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
<h1 style="color:red; text-align:center; padding:4%"><I>Here you see the result of all participated students whose result is posted by admin<I></h1>
<!-- <img src="image/ER.PNG" class="img" alt="Girl in a jacket"> -->
</header>
<!-- <nav>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="aboutus.php">AboutUs</a></li>
  <li><a href="contact.php">ContactUs</a></li>
  <li><a href="view.php">View Event</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="register.php">Register</a></li>
  
  
</ul>

</nav> -->
<?php include'studentnav.php';?>
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
  <img src="image/7.jpg" alt="khjgh" style="width:100%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="image/8.jpg" style="width:100%">
  
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


<section>
<h2 align="center">LIST OF EVENTS</b></h2>


<style>
table,th,td
{
	border:2px solid red;
	text-align:center;
	border-collapse: collapse;
}
table
{
	margin: 0 auto;
	background-color:#80ffbf;
	border-spacing:15px;
	margin-top:25px;
	width:90%;
}
</style>

<?php 
include 'db.php';

// Attempt select query execution

$sql = "SELECT * FROM result";

if($result = mysqli_query($conn, $sql)){

    if(mysqli_num_rows($result) > 0){

        echo "<table>";
		

            echo "<tr>";

              echo "<th>ID </th>";

                echo "<th>EMAIL </th>";

                echo "<th>NAME</th>";

                echo "<th>EVENT</th>";

                echo "<th>STATUS</th>";
				

            echo "</tr>";

        while($row = mysqli_fetch_array($result)){

            echo "<tr>";
            
              echo "<td>" . $row['id'] . "</td>";

                echo "<td>" . $row['email'] . "</td>";

                echo "<td>" . $row['name'] . "</td>";

                echo "<td>" . $row['event'] . "</td>";

                echo "<td>". $row['status'] . "</td>";
				
				 
				   

            echo "</tr>";

        }

        echo "</table>";

        // Free result set

        mysqli_free_result($result);

    } else{

        echo "No records matching your query were found.";

    }

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// Close connection

mysqli_close($conn);

?>


</section>
<footer>
<h2 style="text-align:center; color:white; padding-top:1px;">copyright @ 2020-21</h2>

</footer>
</div

</body>
</html>
<?php
 }
 else{
   header('location:login.php');
 }
?>