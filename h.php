<?php
session_start();
require('Session.php');

?>
<html>
<body>
<form method="POST">
<input type ="text" name="name"><br>
<input type="text" name="fname"><br>
<input type="submit" name="submit">
<form>
<?php
if(isset($_POST['submit']))
{
	
if($_POST['name']!=$_POST['fname'])
{
	echo"fffg";
}
if($_POST['name']==$_POST['fname'])
{
	header("location:login.php");
}
}






