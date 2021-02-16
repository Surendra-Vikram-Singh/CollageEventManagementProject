<?php
session_start();
include("db.php");

$em=$_SESSION['email'];
if($em==true)
{
  $query="SELECT * FROM register where email='$em'";
  $hai=mysqli_query($conn,$query);
  $hello=mysqli_fetch_assoc($hai);
  
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
<script>
document.forms["myForm"]["email"]..style.display = "none";
</script>
<div class="container">

<header>
<h1 style="color:red; text-align:center; padding:4%"><I>
<?php echo "hai dear ".$hello['name'].", "; ?>welcome to IICA EVENT MANAGEMENT SYSTEM . Take part by filling below form :)</I></h1>
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
  <li><a href="resul.php">Result</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>

</nav> -->
<?php include'studentnav.php'?>
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


<section>
<form action="" method="POST" name="myform">
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
	background-color:green;
}
</style>

<tr>
<th colspan="2">Enter your details to participate</th>
</tr>
<tr>
  <td>Event</td>
  <td>
  <?php
  require('db.php');
  $query="SELECT `event` FROM `eventpost` WHERE 1";
  $result=mysqli_query($conn,$query);
  $r= mysqli_fetch_assoc($result);
  // while($r= mysqli_fetch_assoc($result))
  // {
  //     echo var_dump($r)."<br> ";
  // }
  // $sql = "SELECT * FROM participate";
  // if ($result = mysqli_query($conn, $sql)) {
  //     if (mysqli_num_rows($result) > 0) {
  //         while ($row = mysqli_fetch_array($result)) {
              ?>
  <select name="ename" id="event">
    <option>Select Event</option>
    <?php
    while($r= mysqli_fetch_assoc($result))
    {?>
    <option value="<?php echo $r['event'] ?>"><?php echo $r['event'] ?></option>
    <?php
    }
    ?>   
  </select>
  <?php
  //         }
  //     }
  // }
  ?>
  <!-- <input type="text" name="ename" id="event" placeholder="enter the event"> -->
</td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" value="<?php echo $_SESSION['email']; ?>" readonly/></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" name="sname" value="<?php echo $hello['name']; ?>"  readonly></td>
</tr>
<tr>
<td>Department</td>
<td><input type="text" name="dname" value="<?php echo $hello['department']; ?>"  readonly></td>
</tr>
<tr>
<td>Course</td>
<td><input type="text" name="course" placeholder="Enter your course name" size="30" required></td>
</tr>
<tr>
<td>College</td>
<td><input type="text" name="cname" value="<?php echo $hello['collage']; ?>"  readonly></td>
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
<?php
include 'db.php';
if(isset($_POST['submit']))
{
  $ename=$_POST['ename'];
  $email=$_POST['email'];
  $name=$_POST['sname'];
  $department=$_POST['dname'];
  $course=$_POST['course'];
  $cname=$_POST['cname'];


	

	 $sql="INSERT INTO paricipate(event,email,name,department,course,collage)VALUES('$ename','$email','$name','$department','$course','$cname')";
		
	
if (mysqli_query($conn,$sql)) 


echo '<script language="javascript">';
echo 'alert("Registerd succesfully")';
echo '</script>';

 
if(mysqli_error($conn))
{
	 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
/*echo '<script language="javascript">';
echo 'alert("Enter another registration number")';
echo '</script>';*/

}

mysqli_close($conn);
}

}
else
{
  header('location:login.php');
}
?>


  